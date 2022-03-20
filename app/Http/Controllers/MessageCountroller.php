<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;

class MessageController extends Controller {
    // メッセージ登録と画像アップロードのアクション
    public function store(Request $request) {
        $params = $request->json()->all();
        $content = $params['message'];
        $id = Str::uuid();
        $file = $id->toString();

        Message::create([
            'id'        => $id,
            'content'   => $content,
            'file_path' => $file
        ]);

        return response()->json($id);
    }
}
