You must confirm your email address before logging in. An email has been sent to {{ $user->email }}.
If you have not received the confirmation email, we can <a href="{{ url('/confirm/' . $user->id . '/resend') }}">resend it</a>.