<script lang="ts">
	import { FooterLink } from "flowbite-svelte";
	import Header from "../../components/admin/header.svelte";
	import { onMount } from "svelte";
	import { page } from "@inertiajs/svelte";
	import {
		Table,
		TableBody,
		TableBodyCell,
		TableBodyRow,
		TableHead,
		TableHeadCell
	} from "flowbite-svelte";

	interface User {
		id: string;
		firstName: string;
		lastName: string;
		email: string;
		age: string;
	}
	export let users: User[];

	function handleClick() {}

	onMount(() => {
		console.log({ users, admin: $page.props.auth.user });
	});
</script>

<Header />
<div
	class="px-6 md:p-10 xl:p-20 sm:pt-12 lg:py-14 flex flex-col justify-center"
>
	<div class="">
		<h1 class="text-xl lg:text-3xl text-gray-600 font-medium">
			Hi {$page.props.auth.user.name},
		</h1>
		<div class="" />
	</div>
	<!-- <section class="mt-10">
		<div class=" w-full">
			<div class="grid grid-cols-2 xl:grid-cols-4 borderx gap-4">
				<div
					class="py-4 md:py-6 px-4 md:px-10 text-center border shadow-md rounded-md bg-white"
				>
					<h1 class="text-2xl font-medium">Total users</h1>
					<h1 class="text-4xl font-semibold">100</h1>
				</div>
				<div
					class="py-4 md:py-6 px-4 md:px-10 text-center border shadow-md rounded-md bg-white"
				>
					<h1 class="text-2xl font-medium">Total users</h1>
					<h1 class="text-4xl font-semibold">100</h1>
				</div>
				<div
					class="py-4 md:py-6 px-4 md:px-10 text-center border shadow-md rounded-md bg-white"
				>
					<h1 class="text-2xl font-medium">Total users</h1>
					<h1 class="text-4xl font-semibold">100</h1>
				</div>
				<div
					class="py-4 md:py-6 px-4 md:px-10 text-center border shadow-md rounded-md bg-white"
				>
					<h1 class="text-2xl font-medium">Total users</h1>
					<h1 class="text-4xl font-semibold">100</h1>
				</div>
			</div>
		</div>
	</section> -->

	<section class="mt-12 xl:mt-16">
		<h1
			class="text-3xl xl:text-4xl text-blue-600 font-semibold text-centerx mb-6"
		>
			List of signed up users
		</h1>

		<Table hoverable={true}>
			<TableHead>
				<TableHeadCell>Serial</TableHeadCell>
				<TableHeadCell>First Name</TableHeadCell>
				<TableHeadCell>Last Name</TableHeadCell>
				<TableHeadCell>Age</TableHeadCell>
				<TableHeadCell>Email</TableHeadCell>
			</TableHead>
			<TableBody class="divide-y">
				{#each users as user (user.id)}
					<TableBodyRow>
						<TableBodyCell>{user.id}</TableBodyCell>
						<TableBodyCell>{user.firstName}</TableBodyCell>
						<TableBodyCell>{user.lastName}</TableBodyCell>
						<TableBodyCell>{user.age}</TableBodyCell>
						<TableBodyCell>
							<a
								href={`mailto:${user.email}`}
								class="font-medium text-primary-600 hover:underline dark:text-primary-500"
								>{user.email}</a
							>
						</TableBodyCell>
					</TableBodyRow>
				{/each}
			</TableBody>
		</Table>
	</section>
</div>
