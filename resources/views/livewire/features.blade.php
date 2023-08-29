<section class="compare mt-20">
    <div class="text-center md:px-20 mb-10">
        <h1 class="title text-2xl md:text-5xl capitalize mb-10">Compare plans & features</h1>
        <table class="table-fixed border-collapse w-full border-spacing-y-20">
            <thead class="border-b border-b-slate-500">
                <tr class="title">
                    <th class="py-2">Features</th>
                    @foreach ($plans as $plan)
                        <th>{{ $plan->name }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="align-baseline">
                @forelse ($fonctionnalites as $fonction )
                <tr class="border-b border-b-slate-500">
                    <td class="py-2">{{ $fonction->name }}</td>
                    @foreach ($plans as $plan )
                    @if ($fonction->planTarifaires->contains($plan))
                        
                    <td class="py-2">
                        <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none m-auto">
                            <circle cx="16" cy="16" r="12" fill="purple"></circle>
                            <path
                                d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                fill="white"></path>
                        </svg>
                    </td>
                    @else
                    <td></td>
                    @endif
                        
                    @endforeach
                </tr>                   
                @empty
                    
                @endforelse

            </tbody>
        </table>
    </div>
</section>
