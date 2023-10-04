<?php

namespace app\controllers;

class UserImage
{
    public function store()
    {
        try {
            $path = upload(640, 480);

            $auth = user();

            read('photos');
            where('userid', $auth->id);
            $photoUser = execute(isFetchAll: false);
            if ($photoUser) {
                $updated = update('photos', ['path' => $path], ['userid' => $auth->id]);
                @unlink($photoUser->path);
            } else {
                $updated = create('photos', [
                    'userid' => $auth->id,
                    'path' => $path
                ]);
            }

            $auth->path = $path;

            if ($updated) {
                setMessageAndRedirect('upload_success', 'Upload feito com sucesso', '/user/edit/profile');
            } else {
                setMessageAndRedirect('upload_error,', 'Ocorreu um erro ao efetuar o Upload', '/user/edit/profile');
            }
        } catch (\Exception $e) {
            setMessageAndRedirect('upload_error', $e->getMessage(), '/user/edit/profile');
        }
    }
}
