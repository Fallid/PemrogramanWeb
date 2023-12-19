<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Http\Resources\CourseCollection;
use App\Http\Resources\CourseResource;
use App\Models\Courses;
use Illuminate\Http\Request;
use Exception;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $queryData = Courses::all();
            $formattedDatas = new CourseCollection($queryData);
            return response()->json([
                "message"=> "success",
                "data"=> $formattedDatas
            ], 200);
        }catch (Exception $e){
            return response()->json($e->getMessage(),400);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $validatedRequest = $request->validated();
        try{
            $queryData = Courses::create($validatedRequest);
            $formattedDatas = new CourseResource($queryData);
            return response()->json([
                "message" => "success",
                "data" => $formattedDatas
            ], 200);
        }catch(Exception $e){
            return response()->json($e->getMessage(), 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $queryData = Courses::findOrFail($id);
            $formattedDatas = new CourseResource($queryData);

            return response()->json([
                "message" => "success",
                "data" => $formattedDatas
            ], 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, string $id)
    {
        $validatedRequest = $request->validated();
        try {
            $queryData = Courses::findOrFail($id);
            $queryData->update($validatedRequest);
            $queryData->save();
            $formattedDatas = new CourseResource($queryData);
            return response()->json([
                "message" => "success",
                "data" => $formattedDatas
            ], 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $queryData = Courses::findOrFail($id);
            $queryData->delete();
            $formattedDatas = new CourseResource($queryData);
            return response()->json([
                "message" => "success",
                "data" => $formattedDatas
            ], 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }
}
