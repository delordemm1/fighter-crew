<script lang="ts">
	import Header from "../../components/admin/header.svelte";
	import { onMount } from "svelte";
	let users: User[] = []; // Define the type of 'users'

	interface User {
		id: number;
		name: string;
		email: string;
		age: number;
		// Add other properties as needed
	}
	let totalEntries = 0;

	async function fetchData() {
		try {
			const response = await fetch("/api/users");
			if (response.ok) {
				const data = await response.json();
				users = data.users;
				totalEntries = data.totalEntries; // Assign the totalEntries value
			} else {
				console.error("Failed to fetch data");
			}
		} catch (error) {
			console.error("Network error:", error);
		}
	}

	onMount(fetchData);

	async function handleLogout() {
		try {
			const response = await fetch("/api/admin/logout", {
				method: "POST"
				// Include any necessary headers or data for your logout request
			});

			if (response.ok) {
				const data = await response.json();
				console.log(data);

				if (data.message === "success") {
					// Redirect to the admin dashboard on success
					window.location.href = "/admin/login";
				}
			} else {
				console.error("Logout failed");
			}
		} catch (error) {
			console.error("Network error:", error);
		}
	}
</script>

<Header />
<div class="py-10 md:flex">
	<aside class="max-md:hidden">
		<div class="pl-4 pt-10 bg-blue-600 h-[100vh] w-[200px]">
			<ul class="text-white text-xl xl:text-2xl">
				<li>Dashboard</li>
			</ul>
		</div>
	</aside>
	<div class="">
		<!-- <section class="w-full">
            <div class="p-6 lg:p-10 xl:p-20 w-full">
                <h1 class="md:hidden text-3xl text-blue-500 font-semibold text-center mb-6">Dashboard</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 borderx gap-4">
                    <div class="py-4 px-10 text-center border shadow-md rounded-md bg-white">
                        <h1 class="text-2xl font-medium">Total users</h1>
                        <h1 class="text-4xl font-semibold">100</h1>
                    </div>
                    <div class="py-4 px-10 text-center border shadow-md rounded-md bg-white">
                        <h1 class="text-2xl font-medium">Total users</h1>
                        <h1 class="text-4xl font-semibold">100</h1>
                    </div>
                    <div class="py-4 px-10 text-center border shadow-md rounded-md bg-white">
                        <h1 class="text-2xl font-medium">Total users</h1>
                        <h1 class="text-4xl font-semibold">100</h1>
                    </div>
                    <div class="py-4 px-10 text-center border shadow-md rounded-md bg-white">
                        <h1 class="text-2xl font-medium">Total users</h1>
                        <h1 class="text-4xl font-semibold">100</h1>
                    </div>
                </div>
            </div>
        </section> -->
		<div class="mt-14">
			<h1 class="text-3xl lg:text-5xl font-medium text-center mb-6">
				Admin dashboard
			</h1>
			<h1 class="text-3xl text-blue-500 font-semibold text-centerx mb-6">
				List of registered users
			</h1>
			<div class="">
				<table>
					<thead>
						<tr>
							<th>Serial</th>
							<th>Name</th>
							<th>Age</th>
							<th>Email</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
