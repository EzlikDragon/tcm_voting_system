<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<style>
 .candidate-info ul {
      list-style-type: none;
      padding: 0;
      color: white;
      text-align: center;
    }

    .modal-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      color: white;
    }
    .modal-header li{
		list-style-type: none; 
		font-size: 15px;
	}

    .modal-body {
      position: relative;
      padding: 0;
      background-color: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      width: max-content;
    }

    .modal-content {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      position: relative;
      padding: 0;
      background-color: transparent;
      border: none;
      box-shadow: none;
      backdrop-filter: blur(10px);
      height: 100%;
      margin-top: 0px;
      max-width: 600px;
    }

    #candidate-photo {
      width: 500px;
      height: 500px;
      filter: brightness(0.6);
    }

    #plat_view {
      font-size: .8em;
      font-weight: bold;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 2;
      text-shadow: -2px -1px 10px black;
      margin: 0;
    }

    .modal-backdrop {
      opacity: 0.7;
      background-color: black;
    }
</style>

<body>
<!-- Modal -->
<div class="modal fade" id="platform" tabindex="-1" role="dialog" aria-labelledby="platformLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="platformLabel">Candidate Platform </h5>
                <li><strong>Name: </strong><span class="candidate" id="candidate-name"></span></li>
                <li><strong>Course: </strong><span id="candidate-course"></span></li>
                <li><strong>Year: </strong><span id="candidate-year"></span></li>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="candidate-info">
                    <ul>
                        <img id="candidate-photo" src="" alt="Candidate Photo" height="100" width="100">
                        <li><span id="plat_view"></span></li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Preview Modal -->
<div class="modal fade" id="previewModal" tabindex="-1" role="dialog" aria-labelledby="previewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="previewModalLabel">Ballot Preview</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="previewContent">
                    <!-- The preview content will be dynamically inserted here -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Your Votes</h4>
            </div>
            <div class="modal-body">
              <?php
                $id = $voter['id'];
                $sql = "SELECT *, candidates.firstname AS canfirst, candidates.lastname AS canlast FROM votes LEFT JOIN candidates ON candidates.id=votes.candidate_id LEFT JOIN positions ON positions.id=votes.position_id WHERE voters_id = '$id'  ORDER BY positions.priority ASC";
                $query = $conn->query($sql);
                while($row = $query->fetch_assoc()){
                  echo "
                    <div class='row votelist'>
                      <span class='col-sm-4'><span class='pull-right'><b>".$row['description']." :</b></span></span> 
                      <span class='col-sm-8'>".$row['canfirst']." ".$row['canlast']."</span>
                    </div>
                  ";
                }
              ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>


<script>
  let speechSynthesisInstance;
  
  // Function to start Text-to-Speech
  function speakText(text) {
    if (speechSynthesisInstance) {
      speechSynthesis.cancel(); // Cancel any ongoing speech before starting a new one
    }
    const utterance = new SpeechSynthesisUtterance(text);
    utterance.rate = 1; // Adjust speed if needed
    utterance.pitch = 1; // Adjust pitch if needed
    speechSynthesis.speak(utterance);
    speechSynthesisInstance = utterance;
  }

  // Function to stop Text-to-Speech
  function stopSpeaking() {
    if (speechSynthesisInstance) {
      speechSynthesis.cancel(); // Stop the speech synthesis
      speechSynthesisInstance = null;
    }
  }

  $(document).on('click', '.platform', function(e){
    e.preventDefault();
    
    var candidateId = $(this).data('candidate-id');
    $('#platform').modal('show');
    
    // Fetch candidate details using AJAX
    $.ajax({
        type: 'POST',
        url: 'fetch_candidate.php',
        data: { id: candidateId },
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                $('#candidate-name').html(response.firstname + ' ' + response.lastname);
                $('#candidate-course').html(response.course);
                $('#candidate-year').html(response.year);
                $('#candidate-photo').attr('src', 'images/' + response.photo);
                $('#plat_view').html(response.platform);

                // Automatically start Text-to-Speech for the platform
                speakText(response.platform);
            } else {
                alert('Candidate information could not be retrieved.');
            }
        },
        error: function() {
            alert('There was an error processing your request.');
        }
    });
  });

  // Stop TTS when the modal is closed or hidden
  $('#platform').on('hidden.bs.modal', function () {
    stopSpeaking(); // Stop Text-to-Speech when modal is closed
  });


  $(document).ready(function(){
    // Preview button click event
    $('#preview').click(function(e){
        e.preventDefault();

        var previewData = '';

        // Iterate over each position (represented by .box)
        $('.box').each(function(){
            var positionTitle = $(this).find('.box-header b').text();  // Get the position title
            var candidatesList = '';

            // Check selected candidates for this position
            $(this).find('input[type=checkbox]:checked, input[type=radio]:checked').each(function(){
                var candidateName = $(this).closest('li').find('.cname').text();
                candidatesList += '<li>' + candidateName + '</li>';
            });

            // If any candidates are selected for this position, add to preview
            if(candidatesList !== ''){
                previewData += '<h4>' + positionTitle + '</h4><ul>' + candidatesList + '</ul>';
            }
        });

        // If no candidates are selected, show a message
        if(previewData === ''){
            previewData = '<p>No candidates selected yet.</p>';
        }

        // Insert the preview data into the modal content
        $('#previewContent').html(previewData);

        // Show the modal
        $('#previewModal').modal('show');
    });
});


$(document).ready(function(){
    // View Ballot button click event
    $('a[href="#view"]').click(function(e){
        e.preventDefault();
        
        var ballotContent = '';
        
        // Iterate through each position (box) and get selected candidates
        $('.box').each(function(){
            var positionTitle = $(this).find('.box-header b').text(); // Get position title
            var selectedCandidates = '';

            // Find selected candidates (checkbox or radio inputs)
            $(this).find('input[type=checkbox]:checked, input[type=radio]:checked').each(function(){
                var candidateName = $(this).closest('li').find('.cname').text();
                selectedCandidates += '<li>' + candidateName + '</li>';
            });

            // If candidates are selected for this position, add them to the ballot content
            if (selectedCandidates !== '') {
                ballotContent += '<h4>' + positionTitle + '</h4><ul>' + selectedCandidates + '</ul>';
            }
        });

        // If no candidates are selected, show a message
        if (ballotContent === '') {
            ballotContent = '<p>No candidates selected yet.</p>';
        }

        // Insert the ballot content into the modal
        $('#viewBallotContent').html(ballotContent);

        // Show the modal
        $('#viewBallotModal').modal('show');
    });
});


</script>

</body>
</html>
