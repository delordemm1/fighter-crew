<script>

	import { getModal } from "../modal.svelte";

</script>
<header class="h-[60px] fixed top-0 left-0 right-0 z-10">
	<div
		class="px-8 py-2 xl:px-96 xl:py-10x bg-white shadow-sm flex justify-between items-center"
	>
		<div class="w-[50px] lg:w-[100px]x h-[50px]x borderx">
			<a href="/index.html">
				<img src="/images/logo.jpg" alt="Financial fighters crew" class="" />
			</a>
		</div>
		<div class="">
			<ul class="flex gap-4 xl:gap-8 text-lg lg:text-2xl text-[#285495]x">
				<!-- <li>
					<a href="">Contact</a>
				</li> -->
				<li>
					<a href="#signup-modal" on:click|preventDefault={()=>{getModal("signup-modal").open()}} class="text-[#407BFF]">Sign up</a>
				</li>
			</ul>
		</div>
	</div>
</header>
