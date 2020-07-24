<?php

namespace App\Http\Controllers;

use App\EventTable;
use App\Http\Requests\BookFormRequest;
use App\Http\Resources\EventTableCollection;
use App\Http\Resources\EventTableResource;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class EventTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function events()
    {
        return new EventTableCollection(EventTable::with('event', 'table','user')
                                            ->whereNull('user_id')
                                            ->get());
    }

    public function event(int $id)
    {
        $id = (int) $id;
        return new EventTableCollection(EventTable::with('event', 'table','user')
                                            ->whereNull('user_id')
                                            ->where('event_id',$id)
                                            ->get());
    }

    public function book(BookFormRequest $request)
    {
        $event_id = $request->input('event_id');
        $table_id = $request->input('table_id');
        $user = auth()->user();
        $userId = (int)$user['id'] ?? 0;
        $et = EventTable::where('event_id', $event_id)->where('table_id', $table_id)->first();
        try{

            if (!empty($userId)) {
                EventTable::where('event_id', $event_id)->where('table_id', $table_id)->update(
                    ['user_id' => $userId]
                );
                $et = EventTable::where('event_id', $event_id)->where('table_id', $table_id)->first();
            }

            return new EventTableResource($et);

        } catch (\Exception $e) {
            return response()->json(['data' => ['error' => 'Update failed'], 400]);
        }

    }

}
