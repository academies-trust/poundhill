@extends('app')

@section('hero')
	<div class="hero col-md-12">
		<img class="hero-image show" src='{{url()}}/img/Photos/Education_Primary_001.JPG?w=1920&h=500&fit=crop'>
	</div>
@endsection

@section('content')
<div class="container-fluid blue-container text-center">
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<article>
				<header>
					<h1>Assessment without levels</h1>
				</header>
					<h2>What is assessment without levels?</h2>
					<p><span class="text-green"><b>How Has Assessment at Primary School Changed?</b></span></p>
					<p>It's all change for the Primary National Curriculum and this includes how children in Key Stage 1 and Key Stage 2 are assessed.</p>
					<p>All children in Primary school are assessed at some point, but this has changed. Until now, children were usually assessed by the teacher when they entered Primary School. At the end of Year 1, they had the Phonics Screening Test. At the end of Year 2 and Year 6, children were required to complete SATs, this was a combination of teacher assessment and formal tests.</p>
					<p><span class="text-green"><b>What's Changing in Assessments?</b></span></p>
					<p>Children will continue to take the Phonics Screening Test at the end of Year 1 and if they didn’t pass at the end of Year 1 they take it again at the end of Year 2.</p>
					<p>The main change is that children will no longer be assessed against and given a National Curriculum level.  Many parents will be familiar with the old level system that started at level 1 and went up to level 5/6 at Primary School.  Children achieving a level 2a or 2b (by the end of Year 2) and a level 4 or above (by the end of Year 6) were considered to be on track and making good progress. This levels system has now been discarded.</p>
					<p>Schools are now required to use their own on-going assessment systems to track the progress children in their school are making.  New assessments take into account the tougher, new National Curriculum.  At Holmbush we have updated our Reading Cards, <strong>Writing Assessment Criteria (WAC)</sheets, <strong>Maths Assessment Criteria (MAC)</strong> sheets, and <strong>Science Assessment Criteria (SAC)</strong> sheets and introduced a Speaking and <strong>Listening Assessment Criteria Sheet (SPLAC)</strong>. We use these sheets to mark off what your child can do in line with the expectations from the New National Curriculum for their age group and target areas that they need to develop and improve. You can see these when you come into a Learning Share event. We then use the information on these sheets to track the children’s progress on a computer programme called Target Tracker. We have used this for the last few years and it is already updated for the New Curriculum. This shows us if your child is ‘Beginning’ to meet the requirements of the New Curriculum for their age group, ‘Working Within’ or ‘Secure’ which means they are meeting all the requirements. On our tracking system we can also break this down into ‘Beginning +’, ‘Working Within +’ and ‘Secure +’. We expect children to move through these stages over the year and we will report to you at the end of each term as to which stage they are in. e.g. December Year 3 Beginning, March Year 3 Working Within and July Year 3 Secure.</p>
					<p><span class="text-green"><b>Teacher Led Assessments</b></span></p>
					<p>On-going teacher led assessments will continue. This is where the teacher sets up an activity or task for all the children to complete. Children complete the activity (which could be written or practical) and the teacher will decide on whether or not the learning objectives have been met. This kind of on-going assessment is vital at school, as it helps the teacher plan what each child needs to learn next.</p>
					<p><span class="text-green"><b>National Assessments in 2015</b></span></p>
					<p>For children who are currently in Year 2 and Year 6 (taking their SATs in 2015), they will continue to work using the old National Curriculum and will be assessed using the current SATs papers. For these children, not much will have changed. Teacher assessment will still be used for writing assessments, with more formal tests for Maths, Reading and Spelling, Grammar and Punctuation.</p>
					<h2>National Assessment from 2016 onwards</h2>
					<p><span class="text-green"><b>Upon entering Primary School</b></span></p>
					<p>Children will be given a short baseline assessment, completed by the teacher to find the individual child's starting point. We are currently piloting these assessments for the government at Holmbush.</p>
					<p><span class="text-green"><b>Upon entering Primary School</b></span></p>
					<p>Children will be given a short baseline assessment, completed by the teacher to find the individual child's starting point. We are currently piloting these assessments for the government at Holmbush.</p>
					<p><span class="text-green"><b>End of Year 1</b></span></p>
					<p>Children will take the Phonics Screening Test. Children will also be assessed on a regular basis using teacher assessment and Target Tracker to report the progress made by each child, based on end of year expectations.</p>
					<p><span class="text-green"><b>End of Key Stage 1</b></span></p>
					<p>Children will be regularly assessed, throughout the year, by the teacher to ensure each child is making progress towards the end of year expectations.</p> 
					<p>At the end of Year 2, children will be assessed using externally set tests, but will be marked internally by the teacher. This will be done for maths, reading and writing. There will also be an externally set Spelling, punctuation and grammar test, which will be part of the writing assessment. Children will be given a scaled score which will be out of 100, where 100 is the new standard for that stage.</p>
					<p><span class="text-green"><b>Throughout Key Stage 2</b></span></p>
					<p>We will use Target Tracker and our Assessment Criteria Sheets to keep track of the progress each child makes. This is based on the end of year expectations and if the child has met these.  Teacher assessment will continue throughout the year, as this helps the teacher with future planning and to ensure each child is learning and making progress.</p>
					<p><span class="text-green"><b>End of Key Stage 2</b></span></p>
					<p>Teacher assessment will continue throughout the year, this includes continually assessing writing.  Children will also sit National Tests at the end of the year in maths, reading and grammar, spelling and punctuation. These will be externally set and externally marked. Children will be given a scaled score, which parents will be able to compare with the average for the school, the local area and nationally.  The scaled score will be out of 100, where 100 is the new standard for that stage.</p>
			</article>
		</div>		
	</div>
	
	
</div>
@endsection
@section('scripts')
	<script>
	$(document).ready(function() {
		var slides = $('.hero-image');
		var counter = 0;
		var time = 5000;
		var advanceSlide = function() {
			$('.hero-image').eq(counter).removeClass('show');
			counter++;
			if(counter >= slides.length) {
				counter = 0;
			}
			$('.hero-image').eq(counter).addClass('show');
			
		}
		var slidesGo = setTimeout(function() {
			setInterval(function() { advanceSlide() }, time);
		}, time);
	});
	</script>
@endsection