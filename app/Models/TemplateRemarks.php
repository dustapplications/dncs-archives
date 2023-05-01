<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemplateRemark extends Model
{
    protected $fillable = [
        'template_id',
        'status',
        'user_id',
        'comment',
    ];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
