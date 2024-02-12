@props(['array', 'title', 'variable'])

<div class="my-4">
    <div class="my-4 ">
        <h3 class="font-medium text-2xl">{{ $title }}</h3>
        <input id={{$title}} wire:model='{{$title}}'/>
        <button wire:click.prevent="updateTitle('{{$variable}}')"> save</button>
            <button wire:click.prevent=''>
                <svg class="h-8 w-8 text-green-500" width="24"  height="24"  viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z" /></svg>
            </button>
    </div>

    <div>
        @foreach($array as $key => $value)
            <div class="mb-4">
                <div class="grid grid-cols-12">
                    <div class="flex items-center justify-center">
                        @if(!isset($value['checkbox']) || $value['checkbox'])
                            <x-input type="checkbox" class="" wire:model="{{ $variable }}.{{ $key }}.selected" id="{{ $variable }}.{{ $key }}"/>
                        @endif
                    </div>
                    <div class="col-span-10">
                        <x-label for="{{ $variable }}.{{ $key }}">
                            {{ $value['title'] }}
                        </x-label>
                        @if($value['input'] && $value['selected'] && !isset($value['multiple_inputs']))
                            <x-input type="text" class="w-full" wire:model="{{ $variable }}.{{ $key }}.input_value" placeholder="Enter text"/>
                        @endif
                        @if(isset($value['multiple_inputs']) && count($value['multiple_inputs']) > 0 && $value['input'] && $value['selected'])
                            @foreach($value['multiple_inputs'] as $child_key => $input)
                                <x-input type="text" class="w-full my-2" wire:model="{{ $variable }}.{{ $key }}.multiple_inputs.{{ $child_key }}.value" placeholder="Enter {{ $input['title'] }}"/>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div