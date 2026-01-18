<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

function getLastGitPushTime(): ?string
{
    try {
        $output = shell_exec('cd ' . base_path() . ' && git log -1 --format=%cI 2>&1');
        if ($output && strpos($output, 'fatal') === false) {
            return Carbon::parse(trim($output))->format('Y-m-d H:i:s');
        }
    } catch (\Exception $e) {
        return null;
    }
    return null;
}

Route::get('/', function () {
    return view('welcome', ['greeting' => 'Hello again, ',
    'person' => 'Chrispy!',
    'current_time' => now()->format('Y-m-d H:i:s'),
    'last_git_push' => getLastGitPushTime(),
    ]);
});

