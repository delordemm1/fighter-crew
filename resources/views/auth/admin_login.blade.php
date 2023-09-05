
    <form method="POST" action="{{ route('authenticate') }}">
     @csrf

                <div class="mb-4">
              <label for="email" class="">Email</label>
              <input type="email" id="email" name="email" class="" required />
            </div>
            <div class="mb-4">
              <label for="password" class="">Password</label>
              <input type="password" name="password" id="password" class="" required />
            </div>
            <div class="text-center">
              <button type="submit" class="">
                Login
              </button>
            </div>
          </form>
        