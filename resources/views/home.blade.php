@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Fishmarket Dashboard Page</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>
                        &nbsp &nbsp Indonesia is the largest fish producer in Southeast Asia, especially for saltwater consumption fish. The vast marine waters of Indonesia are exploited by foreign fishing vessels that steal the wealth of Indonesian marine fish.
                    </p>
                    <p>
                        &nbsp &nbsp If it's just within the Exclusive Economic Zone waters, it may not be a problem, but they often catch fish far in Indonesian waters, thus disrupting the income of traditional Indonesian fishermen who still have very simple equipment.
                    </p>
                    <P>
                        &nbsp &nbsp The amount of fish is very large and plentiful, including the types that are consumed frequently.
                    </P>
                    <p>
                        &nbsp &nbsp Cultivation of fish for consumption is done to obtain ready-to-eat fish or fish of desired sizes by consumers.
                    </p>
                    <p>
                     &nbsp &bsp The demand for fish for consumption comes from freshwater, brackish, and marine fish. Before engaging in fish consumption cultivation activities, it is necessary to understand the characteristics of the fish breeds to be cultivated.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
