<!-- Login.svelte -->
<script lang="ts">
	async function handleSubmit(event: SubmitEvent) {
		event.preventDefault();

		const formData = new FormData(event.target as HTMLFormElement);

		try {
			const response = await fetch("/api/admin/authenticate", {
				method: "POST",
				body: formData
			});

			if (response.ok) {
				const data = await response.json();
				console.log(data);

				if (data.message === "success") {
					// Redirect to the admin dashboard on success
					window.location.href = "/admin/dashboard";
				}
			} else {
				console.error(`HTTP Error: ${response.status}`);
				const errorMessage = await response.text();
				console.error(errorMessage);
			}
		} catch (error) {
			console.error("Network Error:", error);
		}
	}

	let title: string = "Admin Login";
	let csrf: string = "csrf_token()";
</script>

<div class="flex justify-center mt-10">
	<div class="md:w-2/3 xl:w-1/3">
		<div
			class="borderx shadow-xl shadow-gray-300 rounded-lg bg-white p-4 md:p-8 xl:p-12"
		>
			<h1 class="text-center text-gray-500 mt-2">Welcome!</h1>
			<h1
				class="text-2xl md:text-4xl xl:text-5xl font-medium text-center text-[#1E1E52] uppercase"
			>
				log in
			</h1>
			<form on:submit={handleSubmit}>
				<input type="hidden" name="_token" bind:value={csrf} />
				<div class="mt-8 space-y-6">
					<div class="flex flex-col gap-2">
						<label for="email" class="">Email</label>
						<input
							type="email"
							id="email"
							name="email"
							placeholder="john.doe@gmail.com"
							class="border px-4 py-2 rounded-md focus:outline-none focus:border-gray-400 focus:ring-0 drop-shadow-sm"
						/>
					</div>
					<div class="">
						<div class="flex flex-col gap-2">
							<label for="pswd" class="">Password</label>
							<input
								type="password"
								name="password"
								id="password"
								placeholder="......."
								class="border px-4 py-2 rounded-md focus:outline-none focus:border-gray-400 focus:ring-0 drop-shadow-sm"
							/>
						</div>
						<!-- <div class="float-right mt-2">
							<a href="/" class="text-[#66A7F7]">Forgot password?</a>
						</div> -->
					</div>

					<button
						type="submit"
						class="bg-[#285495] text-white py-3 w-full rounded-lg text-lg"
					>
						Login
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
