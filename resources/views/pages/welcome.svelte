<script lang="ts">
	import { card_data } from "../components/card_data";
	import Card from "../components/Card.svelte";
	import Header from "../components/landing/header.svelte";
	import Footer from "../components/landing/footer.svelte";
	import { getModal } from "../components/modal.svelte";
	import SignupModal from "../components/landing/signup-modal.svelte";
	let list: string = "LIST";

	export let laravel: string = "";
	export let php: string = "";
	const openSignupModal = () => {
		getModal("signup-modal").open();
	};
</script>

<svelte:head>
	<title>{list} - Laravel {laravel} | PHP {php}</title>
</svelte:head>
<div class="pt-20 xl:pt-36">
	<Header />
	<div class="">
		<section class="bg-[#66A7F7]x">
			<div
				class="px-6 md:px-10 xl:px-40 py-10 flex flex-col items-center gap-10 xl:gap-16"
			>
				<div class="borderx text-center">
					<h1 class="text-gray-500x sm:text-lg xl:text-xl">Welcome to</h1>
					<h1
						class="text-[#285495] text-3xl sm:text-4xl md:text-5xl xl:text-8xl mt-1 font-semibold"
					>
						Financial fighters crew
					</h1>
					<h1 class="text-xl sm:text-2xl xl:text-3xl mt-2 md:mt-4">
						Knocking out generational poverty one step at a time!
					</h1>
					<h1 class="mt-4 md:mt-6 sm:text-lg xl:text-xl">
						Join us in this fun,interactive,money class for the youth
					</h1>
					<h1 class="mt-2 text-red-500 sm:text-lg xl:text-xl">
						Starts september 13, 2023
					</h1>
					<div class="mt-4">
						<a href="#signup-modal" on:click|preventDefault={openSignupModal}>
						<button
							class="bg-[#407BFF] text-white py-2 max-sm:w-fullx px-10 rounded-lg text-lg"
						>
							Sign up for free
						</button>
						</a>
					</div>
				</div>
				<div
					class="borderx max-sm:h-[200px] h-[400px] relative overflow-hidden w-full xl:w-2/3 2xl:w-1/2 after:block after:pt-[56.25%]"
				>
					<iframe
						width="560"
						height="400"
						src="https://www.youtube.com/embed/rdw8i0WbzE0?rel=0"
						title="YouTube video player"
						frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
						allowfullscreen
						class="absolute top-0 left-0 w-full h-full rounded-md"
					/>
				</div>
			</div>
		</section>
		<section class="py-10 px-6 xl:py-20 md:px-10 xl:px-40">
			<div
				class="text-white px-6 py-10 md:p-10 xl:p-16x rounded-xl bg-[#85B9F9] drop-shadow-xl flex max-sm:flex-col sm:items-center justify-center xl:gap-20"
			>
				<div class="">
					<h1
						class="text-black text-3xl sm:text-4xl md:text-5xlx xl:text-6xl font-medium"
					>
						Change your life
					</h1>
					<div class="mt-6 lg:mt-10 borderx">
						<ul class="space-y-4">
							<li>
								<div class="flex gap-2 items-center">
									<div
										class="bg-white p-4 rounded-full h-[40px] w-[40px] flex justify-center items-center shadow-md"
									>
										<i class="fa-solid fa-check-double fa-xl text-[#66A7F7]" />
									</div>
									<div class="">
										<span class="text-black text-[20px] md:text-2xl"
											>Budgeting effectively</span
										>
									</div>
								</div>
							</li>
							<li>
								<div class="flex gap-2 items-center">
									<div
										class="bg-white p-4 rounded-full h-[40px] w-[40px] flex justify-center items-center shadow-md"
									>
										<i class="fa-solid fa-check-double fa-xl text-[#66A7F7]" />
									</div>
									<div class="">
										<span class="text-black text-[20px] md:text-2xl"
											>Investing wisely</span
										>
									</div>
								</div>
							</li>
							<li>
								<div class="flex gap-2 items-center">
									<div
										class="bg-white p-4 rounded-full h-[40px] w-[40px] flex justify-center items-center shadow-md"
									>
										<i class="fa-solid fa-check-double fa-xl text-[#66A7F7]" />
									</div>
									<div class="">
										<span class="text-black text-[20px] md:text-2xl"
											>Growing income streams</span
										>
									</div>
								</div>
							</li>
							<li>
								<div class="flex gap-2 items-center">
									<div
										class="bg-white p-4 rounded-full h-[40px] w-[40px] flex justify-center items-center shadow-md"
									>
										<i class="fa-solid fa-check-double fa-xl text-[#66A7F7]" />
									</div>
									<div class="">
										<span class="text-black text-[20px] md:text-2xl"
											>....and many more</span
										>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="mt-6 xl:mt-8 ml-4">
						<a href="#signup-modal" on:click|preventDefault={openSignupModal}>
							<button
								class="bg-white max-sm:w-full py-2 px-8 rounded-md text-black text-lg shadow-md"
							>
								Start now
							</button>
						</a>
					</div>
				</div>
				<div class="max-sm:w-full max-lg:w-1/2">
					<img src="/images/Investing.svg" alt="" />
				</div>
			</div>
			<div
				class="mt-10 px-6 py-10 md:p-10 xl:p-16x rounded-xl bg-white drop-shadow-xl flex max-sm:flex-col flex-row-reverse sm:items-center justify-center xl:gap-20"
			>
				<div class="">
					<h1
						class="text-[#285495] text-3xl sm:text-4xl md:text-5xlx xl:text-6xl font-medium"
					>
						Learn the game of money
					</h1>
					<div class="mt-6 lg:mt-10 borderx">
						<ul class="space-y-4">
							<li>
								<div class="flex gap-2 items-center">
									<div
										class="bg-white p-4 rounded-full h-[40px] w-[40px] flex justify-center items-center shadow-md"
									>
										<i class="fa-solid fa-check-double fa-xl text-[#66A7F7]" />
									</div>
									<div class="">
										<span class="text-gray-600 text-[20px] md:text-2xl"
											>Having the right mindest</span
										>
									</div>
								</div>
							</li>
							<li>
								<div class="flex gap-2 items-center">
									<div
										class="bg-white p-4 rounded-full h-[40px] w-[40px] flex justify-center items-center shadow-md"
									>
										<i class="fa-solid fa-check-double fa-xl text-[#66A7F7]" />
									</div>
									<div class="">
										<span class="text-gray-600 text-[20px] md:text-2xl"
											>Accountability patners</span
										>
									</div>
								</div>
							</li>
							<li>
								<div class="flex gap-2 items-center">
									<div
										class="bg-white p-4 rounded-full h-[40px] w-[40px] flex justify-center items-center shadow-md"
									>
										<i class="fa-solid fa-check-double fa-xl text-[#66A7F7]" />
									</div>
									<div class="">
										<span class="text-gray-600 text-[20px] md:text-2xl"
											>Ongoing motivation</span
										>
									</div>
								</div>
							</li>
							<li>
								<div class="flex gap-2 items-center">
									<div
										class="bg-white p-4 rounded-full h-[40px] w-[40px] flex justify-center items-center shadow-md"
									>
										<i class="fa-solid fa-check-double fa-xl text-[#66A7F7]" />
									</div>
									<div class="">
										<span class="text-gray-600 text-[20px] md:text-2xl"
											>Access to our alumni society</span
										>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="mt-6 ml-4">
						<a href="#signup-modal" on:click|preventDefault={openSignupModal}>
							<button
								class="bg-[#407BFF] max-sm:w-full py-2 px-8 rounded-md text-white text-lg shadow-md"
							>
								Join the class
							</button>
						</a>
					</div>
				</div>
				<div class="max-sm:w-full max-lg:w-1/2">
					<img src="/images/leaders.svg" alt="" />
				</div>
			</div>
		</section>
		<section class="py-10 xl:py-20 2xl:py-32 px-6 bg-[#C2DCFC]x">
			<div class="text-center">
				<h1 class="text-blue-500 text-3xl sm:text-4xl xl:text-6xl font-medium">
					We are offering you a hand -
					<span class="text-black">take it!</span>
				</h1>
				<h1
					class="mt-2 lg:mt-4 text-gray-800 text-lg sm:text-xl xl:text-2xl font-medium"
				>
					Sign up for classes so we can have materials ready for you
				</h1>
			</div>
			<div class="mt-6 flex justify-center">
				<a href="#signup-modal" on:click|preventDefault={openSignupModal}>
					<button
						class="bg-[#1E1E52] text-white font-medium py-2 max-sm:w-fullx px-10 rounded-lg text-lg shadow-md"
					>
						Sign up for free
					</button></a
				>
			</div>
		</section>
		<section
			class="py-10 px-6 md:px-8 xl:py-20x flex max-sm:flex-col-reverse justify-center max-sm:items-center gap-6x xl:gap-10"
		>
			<div class="">
				<div class="max-sm:text-center xl:mt-10">
					<h1 class="text-whitex text-3xl sm:text-4xl xl:text-6xl font-medium">
						Got questions?
					</h1>
					<h1
						class="mt-2 text-gray-100x text-lg sm:text-xl xl:text-2xl font-mediumx"
					>
						Reach out at
						<span class="text-blue-400 mx-2">financialfighters@gmail.com</span>
						or whatsapp<span class="text-blue-400 mx-2">576-475-756</span>
					</h1>
					<h1 class="mt-2 text-gray-600 text-lg sm:text-xl">
						We look forward to hearing from you!
					</h1>
				</div>
				<div class="mt-6 max-sm:flex max-sm:justify-center">
					<a href="mailto:financialfighters@gmail.com">
						<button
							class="bg-[#407BFF] text-white py-2 max-sm:w-fullx px-10 rounded-lg text-lg"
						>
							Contact us
						</button></a
					>
				</div>
			</div>
			<div class="max-sm:w-1/2 w-1/2 lg:w-1/4 xl:w-1/6">
				<img src="/images/Questions.svg" alt="" />
			</div>
		</section>
	</div>
	<Footer />
</div>
<SignupModal />
