<script>
	import { Button, Checkbox, Input, Label } from "flowbite-svelte";
	import Modal, { getModal } from "../modal.svelte";
	import { page, useForm, router } from "@inertiajs/svelte";
	import { onMount } from "svelte";

	let form = useForm({
		firstName: "",
		lastName: null,
		age: null,
		email: null
	});
	// let values = {
	// 	firstName: "",
	// 	lastName: null,
	// 	age: null,
	// 	email: null
	// };

	function handleSubmit() {
		$form.post("/register", {
			preserveScroll: true,
			onSuccess: () => {
				$form.reset();
				console.log($form);
			}
		});
	}
	onMount(() => {
		console.log($form);
	});
	// export let errors = {};
</script>

<Modal id="signup-modal" size={form.wasSuccessful ? "sm" : "xl"} class="w-full">
	{#if $form.wasSuccessful}
		<div class="px-6 w-full text-center space-y-2">
			<div class="mb-4">
				<i class="fa-solid fa-thumbs-up text-5xl text-green-500" />
			</div>
			<h1 class="text-green-500x font-medium sm:text-xl text-gray-600">
				Welldone!
			</h1>
			<h1 class="text-xl sm:text-2xl">
				You have successfully signed up to financial fighters crew
			</h1>
			<h1 class="sm:text-xl text-green-500">See you in class!</h1>
		</div>
	{:else}
		<div class="grid grid-cols-1 md:grid-cols-2">
			<div class="max-sm:px-2 px-6 py-10 xl:p-10 borderx">
				{#if $page.props.flash.message}
					<div class="m-2 mt-0 pt-0 alert alert">
						{$page.props.flash.message}
					</div>
				{/if}
				<h1
					class="text-2xl md:text-4xl xl:text-5xl font-medium text-center borderx text-[#1E1E52] uppercase"
				>
					Sign up
				</h1>
				<h1 class="text-center text-gray-500 mt-2">
					Sign up for classes so we have materials ready for you!
				</h1>
				<form on:submit|preventDefault={handleSubmit}>
					<div class="space-y-4 mt-8 xl:mt-12">
						<div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
							<div class="flex flex-col gap-2">
								<label for="firstName" class="">First name</label>
								<input
									type="text"
									name="firstName"
									id="firstName"
									bind:value={$form.firstName}
									placeholder="John"
									class="border px-4 py-2 rounded-md drop-shadow-sm focus:outline-none focus:border-gray-400 focus:ring-0"
								/>
								{#if $form.errors.firstName}
									<div class="text-red-500">
										{$form.errors.firstName}
									</div>
								{/if}
							</div>
							<div class="flex flex-col gap-2">
								<label for="lastName" class="">Last name</label>
								<input
									type="text"
									name="lastName"
									id="lastName"
									bind:value={$form.lastName}
									placeholder="Doe"
									class="border px-4 py-2 rounded-md drop-shadow-sm focus:outline-none focus:border-gray-400 focus:ring-0"
								/>
								{#if $form.errors.lastName}
									<div class="text-red-500">
										{$form.errors.lastName}
									</div>
								{/if}
							</div>
						</div>
						<div class="space-y-4">
							<div class="flex flex-col gap-2">
								<label for="age" class="">Age</label>
								<input
									type="number"
									name="age"
									id="age"
									bind:value={$form.age}
									placeholder="13"
									class="border px-4 py-2 rounded-md drop-shadow-sm focus:outline-none focus:border-gray-400 focus:ring-0"
								/>
								{#if $form.errors.age}
									<div class="text-red-500">
										{$form.errors.age}
									</div>
								{/if}
							</div>
							<div class="flex flex-col gap-2">
								<label for="email" class="">Email</label>
								<input
									type="email"
									name="email"
									id="email"
									bind:value={$form.email}
									placeholder="john.doe@gmail.com"
									class="border px-4 py-2 rounded-md drop-shadow-sm focus:outline-none focus:border-gray-400 focus:ring-0"
								/>
								{#if $form.errors.email}
									<div class="text-red-500">
										{$form.errors.email}
									</div>
								{/if}
							</div>
						</div>
					</div>

					<button
						type="submit"
						disabled={$form.processing}
						class="bg-[#285495] text-white text-xl px-4 py-3 rounded-lg shadow-xl shadow-gray-300 w-full mt-8"
						>{#if $form.processing}<i class="fa-solid fa-spinner fa-spin " /> {/if} Signup</button
					>
				</form>
			</div>

			<div
				class="max-md:hidden p-6 xl:p-20 border-l flex items-center justify-center"
			>
				<img src="/images/logo.jpg" alt="" class="Financial fighters crew" />
			</div>
		</div>
	{/if}
</Modal>
