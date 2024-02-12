<div>
    <div class="mb-4">
        <h2 class="underline text-center font-medium text-4xl">Agreement</h2>
    </div>
    <table class="border border-collapse border-slate-500">
        <thead>
            <tr>
                <th class="border border-slate-600">Work TO be Performed</th>
                <th class="border border-slate-600">CUSTOMER</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <!-- Add table data here -->
                <td class="border border-slate-700">{{$proposal->work_to_be_performed}}</td>
                <td class="border border-slate-700">{{$proposal->customer}}</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
    <p class="m-5">Agreement made between Agile Court Construction Company, Inc. hereinafter called the Contractor and prof test 2 hereinafter called the Customer for the construction of tennis court with respect to the following terms and specification</p>
    <h3>CONDITIONS FOR OVERSEAS INSTALLATIONS</h3>
    @foreach ($proposal->overseas_conditions as $condition)
    <div class="mb-4">
        <p>{{ $condition['title'] }}</p>
        @if ($condition['selected'])
            <input type="text" value="{{ $condition['input_value'] }}">
        @endif
    </div>
    @endforeach
    <h3>Base</h3>
    @foreach ($proposal->base as $condition)
    <div class="mb-4">
        <p>{{ $condition['title'] }}</p>
        @if ($condition['selected'])
            <input type="text" value="{{ $condition['input_value'] }}">
        @endif
    </div>
    @endforeach
    <h3>Court Preparation</h3>
    @foreach ($proposal->court_preparation as $condition)
    <div class="mb-4">
        <p>{{ $condition['title'] }}</p>
        @if ($condition['selected'])
            <input type="text" value="{{ $condition['input_value'] }}">
        @endif
    </div>
    @endforeach
    <h3>Surfacing</h3>
    @foreach ($proposal->surfacing as $condition)
    <div class="mb-4">
        <p>{{ $condition['title'] }}</p>
        @if ($condition['selected'])
            <input type="text" value="{{ $condition['input_value'] }}">
        @endif
    </div>
    @endforeach
    <h3>Fence</h3>
    @foreach ($proposal->fence as $condition)
    <div class="mb-4">
        <p>{{ $condition['title'] }}</p>
        @if ($condition['selected'])
            <input type="text" value="{{ $condition['input_value'] }}">
        @endif
    </div>
    @endforeach
    <h3>Lights</h3>
    @foreach ($proposal->lights as $condition)
    <div class="mb-4">
        <p>{{ $condition['title'] }}</p>
        @if ($condition['selected'])
            <input type="text" value="{{ $condition['input_value'] }}">
        @endif
    </div>
    @endforeach
    <h3>Court Accessories</h3>
    @foreach ($proposal->court_accessories as $condition)
    <div class="mb-4">
        <p>{{ $condition['title'] }}</p>
        @if ($condition['selected'])
            <input type="text" value="{{ $condition['input_value'] }}">
        @endif
    </div>
    @endforeach
    <h3>Fee</h3>
    @foreach ($proposal->fee as $condition)
    <div class="mb-4">
        <p>{{ $condition['title'] }}</p>
        @if ($condition['selected'])
            <input type="text" value="{{ $condition['input_value'] }}">
        @endif
    </div>
    @endforeach
    <h3>Provisions</h3>
    @foreach ($proposal->provisions as $condition)
    <div class="mb-4">
        <p>{{ $condition['title'] }}</p>
        @if ($condition['selected'])
            <input type="text" value="{{ $condition['input_value'] }}">
        @endif
    </div>
    @endforeach
    <h3>Conditions</h3>
    @foreach ($proposal->conditions as $condition)
    <div class="mb-4">
        <p>{{ $condition['title'] }}</p>
        @if ($condition['selected'])
            <input type="text" value="{{ $condition['input_value'] }}">
        @endif
    </div>
    @endforeach
    <h3>Guarantee</h3>
    @foreach ($proposal->guarantee as $condition)
    <div class="mb-4">
        <p>{{ $condition['title'] }}</p>
        @if ($condition['selected'])
            <input type="text" value="{{ $condition['input_value'] }}">
        @endif
    </div>
    @endforeach
    <h3>Credit</h3>
    @foreach ($proposal->credit as $condition)
    <div class="mb-4">
        <p>{{ $condition['title'] }}</p>
        @if ($condition['selected'])
            <input type="text" value="{{ $condition['input_value'] }}">
        @endif
    </div>
    @endforeach
    <h3>CONDITIONS</h3>
    <p>The Customer agrees to provide a suitable and adequate clean water supply</p>

    <table class="border border-collapse m-5">
        <thead>
            <tr>
                <th class="border m-10">Accepted by</th>
                <th class="border m-10">Agile Courts Construction Company</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <!-- Add table data here -->
                <td class="border m-10">______________________</td>
                <td class="border m-10"><img src="storage\app\public\signatures\signature_7W4jjObCYj.png" alt="Img"/> </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
