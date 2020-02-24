<div class="row">
    <h3 class="text-info  text-center"> Patient Prescriptions</h3>
    </div class = "row">
    <div class="col-md-6">
    <div class="col-md-6">
        @foreach($management-> as $managements)
     <h3> Patient Name:   {{$managements->patient->fname}} </h3> --}}
    </div>

    @endforeach

    <div class="col-md-10">
    <h3> Time Medicine From: {{ $management->schedule->from }} To: {{ $management->schedule->to }} </h3>
    </div>

    <div class="col-md-6">
        <h3> Patient Address: {{ $management->patient->address }}</h3>
        </div>

                <div class="col-md-6">
                    <h3> Medicine Name: {{ $management->medicine->name }}</h3>
                    </div>
                    <div class="col-md-6">
                        <h3> Medicine Size: {{ $management->medicine->size}}</h3>
                        </div>
         <div class="col-md-6">
        <h3> Medicine Dosage: {{ $management->medicine->dosage}}</h3>
        </div>
        <div class="col-md-6">
            <h3> Medicine State: {{ $management->medicine->state}}</h3>
            </div>
            <div class="col-md-6">
                <h3> Medicine Instruction: {{ $management->medicine->instruction}}</h3>
          </div>
    </div> 
