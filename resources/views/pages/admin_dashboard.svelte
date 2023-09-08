<script lang="ts">
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

<div>
	<h2>ADMIN DASHBOARD</h2>
</div>

<div>
	<table>
		<thead>
			<tr>
				<th>S/N</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>AGE</th>
			</tr>
		</thead>

		<tbody>
			{#each users as user}
				<tr>
					<td>{user.id}</td>
					<td>{user.name}</td>
					<td>{user.email}</td>
					<td>{user.age}</td>
				</tr>
			{/each}
		</tbody>
	</table>
</div>

<div>Total Entries: {totalEntries}</div>

<button on:click={handleLogout}>Logout</button>
