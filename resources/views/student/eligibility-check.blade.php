<!-- resources/views/eligibility_test.blade.php -->

@extends('layouts.app')

@section('content')
<center>
    <div class="eligibility-container">
        <h2>Eligibility Test</h2>
        <form id="eligibilityForm" method="post" action="{{ url('/submit-eligibility') }}">
            @csrf

            <!-- Question 1 -->
            <div class="question" id="question1">
                <label for="education">What is your educational background?</label>
                <select name="education" id="education">
                    <option value="high_school">High School Graduate</option>
                    <option value="bachelor">Bachelor's Degree</option>
                    <option value="master">Master's Degree</option>
                    <option value="doctorate">Doctorate</option>
                </select>
            </div>

            <!-- Question 2 -->
            <div class="question" id="question2">
                <label for="fieldOfStudy">Field of Study:</label>
                <select name="fieldOfStudy" id="fieldOfStudy"></select>
            </div>

            <!-- Question 3 -->
            <div class="question" id="question3">
                <label for="professionalExperience">Do you have professional experience related to your field of study?</label>
                <select name="professionalExperience" id="professionalExperience">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>

            <!-- ... Additional Questions ... -->

            <button type="submit">Submit</button>
        </form>
    </div>
</center>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{ url('public/backend_assets/js/eligibility.js') }}"></script>
@endsection
