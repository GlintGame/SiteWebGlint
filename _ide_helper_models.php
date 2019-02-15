<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Anonymuser
 *
 * @property int $id
 * @property string $ip
 * @property string $last_post
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $posts
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anonymuser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anonymuser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anonymuser query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anonymuser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anonymuser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anonymuser whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anonymuser whereLastPost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anonymuser whereUpdatedAt($value)
 */
	class Anonymuser extends \Eloquent {}
}

namespace App{
/**
 * App\Post
 *
 * @property int $id
 * @property string $content
 * @property int|null $user_id
 * @property int|null $anonymuser_id
 * @property int|null $version_id
 * @property string $given_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Anonymuser|null $anonymuser
 * @property-read \App\User|null $user
 * @property-read \App\Version|null $version
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereAnonymuserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereGivenName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereVersionId($value)
 */
	class Post extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $posts
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Version
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $change_log
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $posts
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Version newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Version newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Version query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Version whereChangeLog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Version whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Version whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Version whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Version whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Version whereUrl($value)
 */
	class Version extends \Eloquent {}
}

