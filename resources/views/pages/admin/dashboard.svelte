<script lang="ts">
	import Header from "../../components/admin/header.svelte";

	interface User {
  		id: string;
 		name: string;
		email: string;
		age: string;
	}
	export let users: User[]=[];	
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
						{#each users as user (user.id)}
							<tr>
								<td>{user.id}</td>
								<td>{user.name}</td>
								<td>{user.age}</td>
								<td>{user.email}</td>
							</tr>
						{/each}
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
