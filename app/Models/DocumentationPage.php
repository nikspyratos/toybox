<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Orbit\Concerns\Orbital;

class DocumentationPage extends Model
{
    use Orbital;

    public static function schema(Blueprint $blueprint): void
    {
        $blueprint->string('title');
        $blueprint->string('group')->nullable();
        $blueprint->string('order_in_group');
        $blueprint->string('slug');
        $blueprint->text('content');
        $blueprint->boolean('visible_in_navigation')->default(true);
        $blueprint->timestamp('last_updated_at');
    }

    public function getLiveUrl(): string
    {
        return route('docs.show', ['DocumentationPage' => $this]);
    }
}
