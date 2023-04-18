<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status', 'project_file', 'project_id', 'user_id'];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function deleteFile(): void
    {
        if (\File::exists(public_path($this->project_file))) {
            \File::delete(public_path($this->project_file));
        }
    }

    public static function uploadFile($file): array
    {
        $fields = [];
        if ($file) {
            $fileName = 'file' . rand(1000, 9999) . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('files', $file, $fileName);
            $fields += ['project_file' => "storage/files/$fileName"];
        }
        return $fields;
    }
}
