@foreach($pres as $i=>$p)
	
	<tr>
			
			<td> {{ Drug::find($p['drug_id'])->name }} ({{ $p['dosage'].' '.$p['measure'] }}) </td>
			<td>
				
				Take 1 {{ $p['form'] }} {{ $p['frequency'] }} starting from {{ date('F d, Y', strtotime($p['start_date'])) }} to {{ date('F d, Y', strtotime($p['end_date'])) }}

			</td>
			<td> <a href="#remove" onclick="removePres({{ $i }}); $(this).parent().parent().hide(500); " ><b>x</b></a> </td>

	</tr>

@endforeach