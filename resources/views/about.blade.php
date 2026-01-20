<x-layout title="About">

	<main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row" style="gap: 2rem;">
        <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
            <h1 class="mb-1 font-medium">{{"It's about you, " . $person}}</h1>
            <hr class="mb-1">
            <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">Laravel has an incredibly rich ecosystem. <br>You can continue this project whenever.</p>
            
            <x-nav>
        
            </x-nav>
        </div>
              
       <x-card>
            <img src="{{ asset('images/sig.svg') }}" alt="signature" />
        </x-card>
    </main>

</x-layout>