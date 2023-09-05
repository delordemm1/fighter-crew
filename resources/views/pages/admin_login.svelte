<!-- Login.svelte -->
<script lang="ts"> 
async function handleSubmit(event: SubmitEvent) {
    event.preventDefault();

    const formData = new FormData(event.target as HTMLFormElement);

    try {
            const response = await fetch('/api/admin/authenticate', {
                method: 'POST',
                body: formData,
            });

            if (response.ok) {
                const data = await response.json();
                console.log(data);

                if (data.message === 'success') {
                    // Redirect to the admin dashboard on success
                    window.location.href = '/admin/dashboard';
                }
            } else {
                console.error(`HTTP Error: ${response.status}`);
                const errorMessage = await response.text();
                console.error(errorMessage);
            }
        } catch (error) {
            console.error('Network Error:', error);
        }
    }



let title: string = "Admin Login";
let csrf: string = "csrf_token()";
  </script>
  
  <section class="bg-gray-900">
    <div class="mx-auto max-w-screen-2xl px-4 py-8 lg:px-6 lg:py-16">
      <div class="text-center">
        <div class="mx-auto max-w-screen-sm text-center">
          <h1 class="text-primary-500 mb-8 text-7xl font-extrabold tracking-tight lg:text-9xl">
            Login
          </h1>
        </div>
        <div class="grid grid-cols-1 content-center gap-4 sm:grid-cols-1">
          <form on:submit={handleSubmit}>
            <input type="hidden" name="_token" bind:value="{csrf}">
            <div class="mb-4">
              <label for="email" class="block text-white text-sm font-medium mb-2">Email</label>
              <input type="email" id="email" name="email" class="rounded-lg p-2 bg-gray-800 text-white" required />
            </div>
            <div class="mb-4">
              <label for="password" class="block text-white text-sm font-medium mb-2">Password</label>
              <input type="password" name="password" id="password" class="rounded-lg p-2 bg-gray-800 text-white" required />
            </div>
            <div class="text-center">
              <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full">
                Login
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section> 
  