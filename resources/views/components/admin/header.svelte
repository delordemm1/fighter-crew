<script>
		import { page } from "@inertiajs/svelte";

</script>
<header class="h-[60px]">
	<div class="px-4 sm:px-8 py-3 xl:px-10  xl:py-10x bg-slate-200 flex justify-between items-center">
		<div class="w-[50px] lg:w-[100px]x h-[50px]x borderx max-sm:hidden">
			<a href="/index.html">
				<img src="/images/logo.jpg" alt="Financial fighters crew" class="rounded-full">
			</a>
		</div>

		<div class="flex justify-center items-center gap-8 lg:gap-12">
			<div class="space-x-4 flex items-center">
				<i class="fa-solid fa-user text-2xl xl:text-3xl text-gray-700"></i>
			  <span class="text-gray-600">{$page.props.auth.user.email}</span>
			</div>
			<div class="text-red-500 mt-10x">
				<a href="/admin/logout">
					<i class="fa-solid fa-arrow-right-from-bracket"></i>
				<span class="ml-1">Log out</span>
				</a>
			</div>
		</div>
	</div>
</header>
