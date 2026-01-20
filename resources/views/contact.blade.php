<x-layout title="Contact">

	<main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row" style="gap: 2rem;">
		<div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
			<h1 class="mb-1 font-medium">{{"It's your contact, " . $person}}</h1>
			<hr class="mb-1">
			<p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">Your telephone number is:<br>[Object object] NaN null NaN, NaN NaN null, null null NaN NaN</p>
						
			 <x-nav>
        
            </x-nav>
		</div>

      	<x-card class="card">
            <h4>Contact Me</h4>
			<hr>
			<textarea placeholder="Type your message here, sillygoose."></textarea>
			<br>
			<button>Goosebutton</button>
			<style>
			.card {
				flex: 1;
				flex-flow: row wrap;
				text-align: left;
				margin: auto;
				color: chartreuse;
				/* max-width: 20rem; */
			}
			.card > button {
				border: 0.1rem solid blue;
				padding: 0.2rem;
				background: darkred;
				text-shadow: 0rem 0rem 0rem 0rem magenta;
				transition: all 0.4s linear;
			}
			.card > button:hover {
				cursor: pointer;
				color: brown;
				background: cadetblue;
				border: 0.1rem solid aqua;
				text-shadow: 1rem 1rem 1rem 1rem magenta;
				transition: all 0.2s linear;

			}
			</style>
        </x-card>
	</main>

</x-layout>