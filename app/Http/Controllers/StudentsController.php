<?php

namespace App\Http\Controllers;

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

    public function store()
    {
        // 保存学生信息
    }

    public function destroy()
    {
        // 删除

    }

}
