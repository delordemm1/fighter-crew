<script lang="ts">
	import { Button, Checkbox, Input, Label } from "flowbite-svelte";
	import Modal, { getModal } from "../modal.svelte";
</script>

<Modal id="signup-modal" size="xl" class="w-full">
	<div
		class="grid grid-cols-1 md:grid-cols-2"
	>
		<div class="max-sm:px-2 px-6 py-10 xl:p-10 borderx">
			<h1
				class="text-2xl md:text-4xl xl:text-5xl font-medium text-center borderx text-[#1E1E52] uppercase"
			>
				Sign up
			</h1>
			<h1 class="text-center text-gray-500 mt-2">
				Sign up for classes so we have materials ready for you!
			</h1>
			<div class="space-y-4 mt-8 xl:mt-12">
				<div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
					<div class="flex flex-col gap-2">
						<label for="firstName" class="">First name</label>
						<input
							type="text"
							name="firstName"
							id=""
							placeholder="John"
							class="border px-4 py-2 rounded-md drop-shadow-sm focus:outline-none focus:border-gray-400 focus:ring-0"
						/>
					</div>
					<div class="flex flex-col gap-2">
						<label for="lastName" class="">Last name</label>
						<input
							type="text"
							name="lastName"
							id=""
							placeholder="Doe"
							class="border px-4 py-2 rounded-md drop-shadow-sm focus:outline-none focus:border-gray-400 focus:ring-0"
						/>
					</div>
				</div>
				<div class="space-y-4">
					<div class="flex flex-col gap-2">
						<label for="age" class="">Age</label>
						<input
							type="number"
							name="age"
							id=""
							placeholder="13"
							class="border px-4 py-2 rounded-md drop-shadow-sm focus:outline-none focus:border-gray-400 focus:ring-0"
						/>
					</div>
					<div class="flex flex-col gap-2">
						<label for="email" class="">Email</label>
						<input
							type="email"
							name="email"
							id=""
							placeholder="john.doe@gmail.com"
							class="border px-4 py-2 rounded-md drop-shadow-sm focus:outline-none focus:border-gray-400 focus:ring-0"
						/>
					</div>
				</div>
			</div>
			<input
				type="submit"
				value="Signup"
				class="bg-[#285495] text-white text-xl px-4 py-3 rounded-lg shadow-xl shadow-gray-300 w-full mt-8"
			/>
		</div>
		<div
			class="max-md:hidden p-6 xl:p-20 border-l flex items-center justify-center"
		>
			<img src="/images/logo.jpg" alt="" class="Financial fighters crew" />
		</div>
	</div>
</Modal>
