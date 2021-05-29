<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Layout;
use Carbon\Carbon;
use Image;

class LayoutController extends Controller
{
    public function index(){
        return view('admin.land_layouts.index',[
            'layouts' => Layout::all(),
        ]);
    }
    public function store(Request $request){

        $layout_id = Layout::insertGetId($request->except('_token','photo') + [
            'created_at' => Carbon::now(),
        ]);
        $uploaded_photo = $request->file('photo');
        $new_file_name = $layout_id. "." . $uploaded_photo->getClientOriginalExtension();
        $new_file_location = 'uploads/layout_photo/'.$new_file_name;
        Image::make($uploaded_photo)->save(base_path($new_file_location));
        Layout::find($layout_id)->update([
            'photo' => $new_file_name,
        ]);
       return back()->with('success_status', 'Added successfully');
    }
    public function delete($id){
        echo $old_photo_location = 'uploads/layout_photo/'.Layout::find($id)->photo;
        Layout::find($id)->delete();
            unlink(base_path($old_photo_location));
        return back()->with('delete_status', 'Deleted successfully');
    }
    public function layoutupdate($id){
        return view('admin.land_layouts.update_layout', [
            'info' => Layout::find($id)
        ]);
    }
    public function layoutupdatepost(Request $request, $id){
        Layout::find($id)->update($request->except('_token', 'photo'));
        if ($request->hasFile('photo')) {
            if (Layout::find($id)->photo != 'default.jpg') {
                $old_photo_location = 'uploads/layout_photo/' . Layout::find($id)->photo;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('photo');
            $new_file_name = $id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'uploads/layout_photo/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Layout::find($id)->update([
                'photo' => $new_file_name,
            ]);
            return back()->with('update_layout', 'Layout updated successfully!!!');
        } else {
            return back();
        }
    }
}
