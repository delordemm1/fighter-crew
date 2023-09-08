<script>
  import { router } from '@inertiajs/svelte';

let values = {
  name: null,
  age: null,
  email: null,
}

function handleSubmit() {
  router.post('/users', values)
}

let title="reg";
</script>

<svelte:head>
	<title>{title}</title>
</svelte:head>

<section class="bg-gray-900">
	<div class="mx-auto max-w-screen-2xl px-4 py-8 lg:px-6 lg:py-16">
		<div class="text-center">
			<div class="mx-auto max-w-screen-sm text-center">
				<h1
					class="text-primary-500 mb-8 text-7xl font-extrabold tracking-tight lg:text-9xl"
				>
					{title}
				</h1>
			</div>
                    <div class="grid grid-cols-1 content-center gap-4 sm:grid-cols-1">
                      <form on:submit|preventDefault={handleSubmit}>
                        <label for="name">First name:</label>
                        <input id="name" bind:value={values.name}>
                      
                        <label for="age">Last name:</label>
                        <input id="age" bind:value={values.age}>
                      
                        <label for="email">Email:</label>
                        <input id="email" bind:value={values.email}>
                      
                        <button type="submit">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </section> 
              