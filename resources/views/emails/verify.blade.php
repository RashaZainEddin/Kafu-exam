<p>Dear {{ $user->name }},</p>

<p>Thank you for registering for Ayat employment site. Please click the following link to verify your email address:</p>

<a href="{{ route('verification.verify', ['id' => $user->id, 'hash' => sha1($user->email)]) }}">Verify Email</a>
