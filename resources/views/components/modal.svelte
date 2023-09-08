<script context="module" lang="ts">
	const modals: Record<string, { open: any; close: any; toggle: any }> = {}; //all modals get registered here for easy future access

	// 	returns an object for the modal specified by `id`, which contains the API functions (`open` and `close` )
	export function getModal(id: string) {
		return modals[id];
	}
</script>

<script lang="ts">
	import { Modal } from 'flowbite-svelte';
	import type { ComponentProps } from 'svelte';

	let isOpen = false;
	const toggle = () => (isOpen = !isOpen);

	export let id: string;
	function open() {
		isOpen = true;
	}
	function close() {
		isOpen = false;
	}
	modals[id] = { open, close, toggle };
	interface $$Props extends ComponentProps<Modal> {
		id: string;
	}
</script>

<Modal bind:open={isOpen}  {...$$props}>
	<slot />
</Modal>
