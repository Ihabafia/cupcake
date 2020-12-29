<div class="sm:mx-auto sm:w-full sm:max-w-md">
    <img class="mx-auto h-12 w-auto" src="{{ asset('images/CCLogo2.svg') }}"
         alt="Workflow">
    <h2 class="mt-3 text-center text-3xl font-extrabold text-amber-900">
        Sign in to your account
    </h2>
    <p class="mt-2 text-center text-sm text-gray-100 max-w">
        Or
        <a href="#" class="font-medium text-amber-300 hover:text-amber-400">
            start your 14-day free trial
        </a>
    </p>
</div>

<div class="mt-4 sm:mx-auto sm:w-full sm:max-w-md px-2">
    <div class="bg-amber-600 py-8 px-4 shadow sm:rounded-lg sm:px-10">
        <form class="space-y-6" action="#" method="POST">
            <x-form.input id="email" title="Email address" name="email" type="email" required :vale="old('email')" />

            <x-form.input id="password" title="Password" name="password" type="password" required />

            <div class="flex items-center justify-between">
                <x-form.checkbox id="remember_me" name="remember_me" title="Remember me" />

                <div class="text-sm">
                    <a href="#" class="font-medium text-amber-300 hover:text-amber-400">
                        Forgot your password?
                    </a>
                </div>
            </div>

            <div>
                <x-form.button title="Sign in" type="submit" />
            </div>
        </form>
    </div>
</div>
