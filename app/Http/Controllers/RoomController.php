<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomDetail;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function faculty($faculty)
    {
        $faculty_rooms = Room::where('faculty_name', $faculty)->get();

        $total = $faculty_rooms->count();

        return view('user.pages.faculty', compact('faculty_rooms', 'faculty', 'total'));
    }

    public function major($major, $filter)
    {
        $room = Room::findOrFail($major);
        $list_rooms = $room->where('faculty_name', $room->faculty_name);
        $details = RoomDetail::findOrFail($major);
        
        if ($filter == 'material') {
            $details = $details->where('material_id', '!=', 0)->where('room_id', $major);
        } else {
            $details = $details->where('tool_id', '!=', 0)->where('room_id', $major);
        }

        $details = $details->paginate(8);

        return view('user.pages.tools', compact('room', 'details', 'list_rooms', 'filter', 'major' ));
    }
}
