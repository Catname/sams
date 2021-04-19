<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use App\Http\Requests\StudentRequest;
use App\Models\Achievement;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        // 显示所有学生信息
        $achievements = Achievement::with('student')->orderBy('count', 'desc')->paginate(20);
        return view('students.index', compact('achievements'));
    }

    public function create()
    {
        // 新增学生信息页面
        return view('students.create');
    }

    public function store(StudentRequest $request, ImageUploadHandler $uploader)
    {
        // 保存学生信息
        $student = new Student();
        $achievement = new Achievement([
            'chinese' => $request->chinese,
            'math' => $request->math,
            'english' => $request->english,
            'count' => ($request->chinese + $request->math + $request->english),
        ]);
        $student->name = $request->name;
        if ($request->avatar) {
            $result = $uploader->save($request->avatar, 'avatars', 1);
            if ($result) {
                $student->avatar = $result['path'];
            }
        } else {
            // 默认头像
            $student->avatar = 'https://cdn.learnku.com/uploads/images/201710/14/1/ZqM7iaP4CR.png';
        }

        $student->save();
        $student->achievement()->save($achievement);

        return redirect()->route('students.index')->with('success', '学生添加成功！');

    }

    public function destroy(Student $student)
    {
        // 删除
        $student->delete();
        return redirect()->route('students.index')->with('success', '学生删除成功！');

    }

}
