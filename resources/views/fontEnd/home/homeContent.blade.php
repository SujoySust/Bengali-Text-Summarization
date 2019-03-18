@extends('fontEnd.master')
@section('content')
<div class="banner">
	<div class="container mb40">
    <h2>Text summarization</h2>
    <p>Text summarization using sequence to sequence model in TensorFlow.</p>
    <h2>Introduction</h2>
    <p>This repository is a demonstration of abstractive summarization of news article exploiting TensorFlow <a href="https://www.tensorflow.org/tutorials/seq2seq/" rel="nofollow">sequence to sequence model</a>. This model incorporates attention mechanism and uses <a href="http://colah.github.io/posts/2015-08-Understanding-LSTMs/" rel="nofollow">LSTM cell</a> as both encoder and decoder.</p>
    <p><a target="_blank" rel="noopener noreferrer" href="https://github.com/hengluchang/newsum/blob/master/seq2seq.PNG"><img src="https://github.com/hengluchang/newsum/raw/master/seq2seq.PNG" alt="" style="max-width:100%;"></a></p>

    <h2>References</h2>
    <ul>
    <li><a href="https://www.tensorflow.org/tutorials/seq2seq/" rel="nofollow">Sequence-to-Sequence Models</a>: TensorFlow's tutorial using seq2seq_model.py.</li>
    <li><a href="http://suriyadeepan.github.io/2016-06-28-easy-seq2seq/" rel="nofollow">Chatbots with Seq2Seq</a>: I adpoted most of the code from this blog.</li>
    <li><a href="http://lauragelston.ghost.io/speakeasy/" rel="nofollow">Speakeasy chatbot</a>: A blog with benchmarked training step-time using various computing engines.</li>
    <li><a href="https://arxiv.org/abs/1512.01712" rel="nofollow">Generating News Headlines with Recurrent Neural Networks</a>: A related work in generating news haedlines.</li>
    <li><a href="https://www.youtube.com/watch?v=OHyVNCvnsTo" rel="nofollow">Evaluation and preplexity</a>: A youtube video explaining preplexity.</li>
    <li><a href="http://colah.github.io/posts/2015-08-Understanding-LSTMs/" rel="nofollow">Understanding LSTM Networks</a>: A blog explaning LSTM.</li>
    </ul>
    <h2>Research Paper References</h2>
    <ul>
    <li><a href="https://arxiv.org/pdf/1409.3215.pdf" rel="nofollow">Sequence to Sequence Learning with Neural Networks</a></li>
    <li><a href="https://arxiv.org/pdf/1409.0473.pdf" rel="nofollow">Neural Machine Translation by Jointly Learning to Align and Translate</a></li>
    <li><a href="https://arxiv.org/pdf/1508.04025.pdf" rel="nofollow">Effective Approaches to Attention-based Neural Machine Translation</a></li>
    <li><a href="https://arxiv.org/pdf/1412.7449.pdf" rel="nofollow">Grammar as a Foreign Language</a></li>
    </ul>
    <div class="clearfix" style="margin-bottom:5%"></div>
	</div>
</div>
<!-- //banner -->

<!-- banner-bottom -->
<div class="banner-bottom">
	<div class="container">
		<h2 class="tittle">Summarize Your Document</h2> 
		<div class="bottom-grids">
            <a href="{{url('summary/abstract/english')}}">
			<div class="col-md-3 bottom-grid">
				<div class="bottom-text">
					<h3>Abstractive English Text Summarization</h3>
					<p>Summary of Extractive English Document</p>
				</div>
				<div class="bottom-spa"><span class="glyphicon glyphicon-education" aria-hidden="true"></span></div>
            </div>
            </a>
            <a href="{{url('summary/abstract/bengali')}}">
            <div class="col-md-3 bottom-grid">
				<div class="bottom-text">
					<h3>Abstractive Bengali Text Summarization</h3>
					<p>Summary of Extractive Bengali Document</p>
				</div>
				<div class="bottom-spa"><span class="glyphicon glyphicon-education" aria-hidden="true"></span></div>
            </div>
            </a>
            <a href="{{url('summary/extractive/english')}}">
            <div class="col-md-3 bottom-grid">
				<div class="bottom-text">
					<h3>Extractive English Text Summarization</h3>
					<p>Summary of Extractive English Document</p>
				</div>
				<div class="bottom-spa"><span class="glyphicon glyphicon-education" aria-hidden="true"></span></div>
            </div>
            </a>
            <a href="{{url('summary/extractive/bengali')}}">
            <div class="col-md-3 bottom-grid">
				<div class="bottom-text">
					<h3>Extactive Bengali Text Summarization</h3>
					<p>Summary of Extractive Bengali Document</p>
				</div>
				<div class="bottom-spa"><span class="glyphicon glyphicon-education" aria-hidden="true"></span></div>
            </div>
            </a>

			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //banner-bottom -->
<!-- team -->
<div class="teachers">
	<div class="container">
		<div class="teach-head">
			<h3>OUR TEACHERS</h3>
			<p>We have got some of the best teachers of Department of Computer Science & Engineering, SUST with us.
				They really supported and motivated us for the long time.It might be very difficult to fulfil our project without the continuous help of our supervisor
				specially Md Mahafuzur Rahaman, Assistant Professor, CSE-SUST And Enamul Hassan, Lecturer, CSE-SUST.
			</p>
		</div>
		<div class="team-grids">
			<div class="col-md-3 team-grid text-center">
				<div class="team-img">
					<img src="{{asset('fontEnd/')}}/images/1.jpg" alt=""/>
					<h3>M. Jahirul Islam, PhD., PEng</h3>
					<h4>Professor & Head</h4>
					<h4>Chairman of 4th Year 2nd Semester</h4>
					<p>
						<span><strong>Contact Information:</strong></span>
						Office Address: Room: 321, Dept. of CSE, Dr. M.A. Wazed Miah IICT Building, SUST
						Phone: +880-821- 713850/ 714479/ 717850 Ext. 671 (O), +880-821-726695 (H)
						Fax: +880-821- 715257<br>
						<span><strong>Email: </strong></span>jahir-cse@sust.edu<br>
						<span><strong>Research Interest: </strong></span> Signal and Image Processing, Image Segmentation, Machine Learning and Computer Vision, Document Image Analysis,
						Pattern Recognition, Mammogram Analysis and Breast Cancer Detection, Natural Language Processing, Active Safety Features in Automotive
						Applications, Automotive Embedded Systems.<br>
					</p>

				</div>
			</div>
			<div class="col-md-3 team-grid text-center">
				<div class="team-img">
					<img src="{{asset('fontEnd/')}}/images/2.jpg" alt=""/>
					<h3>Dr. Farida Chowdhury</h3>
					<h4>Associate Professor</h4>
					<h4>Chairman of 4th Year 1st Semester</h4>
					<p><strong>Contact Information: </strong>
						<strong>Email: </strong>deeba.bd@gmail.com<br>
						<strong>Research Interest:</strong> Peer-to-Peer Networking, Mobile Networks, Usable Security.<br>
					</p>
				</div>
			</div>
			<div class="col-md-3 team-grid text-center">
				<div class="team-img">
					<img src="{{asset('fontEnd/')}}/images/3.jpg" alt=""/>
					<h3>Md Mahfuzur Rahaman</h3>
					<h4>Assistant Professor</h4>
					<h4>Supervisor</h4>
					<p><strong>Contract Information</strong>
						Office Address: Room: 317, Dept. of CSE, Dr. M.A. Wazed Miah IICT Building, SUST
						Phone: 8801717831156<br>
						<strong>Email:  </strong>mahfuz-cse@sust.edu, mahfuzsustbd@gmail.com<br>
						<strong>Research Interest: </strong>Natural Language Processing, Machine Learning and Artificial Intelligence.<br>
					</p>

				</div>
			</div>
			<div class="col-md-3 team-grid text-center">
				<div class="team-img">
					<img src="{{asset('fontEnd/')}}/images/4.jpg" alt=""/>
					<h3>Enamul Hassan</h3>
					<h4>Lecturer</h4>
					<h4>Supervisor</h4>
					<p><strong>Contract Information:</strong>
						Office Address: Room no: 214, Department of Computer Science and Engineering,
						Dr. M. A. Wazed Miah IICT Building, Shahjalal University of Science and Technology, Sylhet-3114<br>
						<strong>Phone: </strong>+8801914061632<br>
						<strong>Email: </strong>enam-cse@sust.edu<br>
						<strong>Research Interest: </strong>Bioinformatics, Natural Language Processing, Data Mining, Deep Learning.<br>

					</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

	</div>
</div>
<!-- team -->
<!-- our facilities -->
<div class="facilities">
	<div class="container">
		<h3 class="tittle">SOME WEBSITES</h3>
			<script src="{{asset('fontEnd/js/jquery.swipebox.min.js')}}"></script>
			<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
			</script>
				<div class="view view-seventh">
                    <a href="http://www.abigailsee.com/2017/04/16/taming-rnns-for-better-summarization.html">
						<img src="{{asset('fontEnd/images/g1.png')}}" alt="" >
                    <div class="mask">
                        <h4>Tamming</h4>
                        <p>Taming Recurrent Neural Networks for Better Summarization</p>
                        
                    </div></a>
                </div>
				<div class="view view-seventh">
					<a href="https://towardsdatascience.com/a-quick-introduction-to-text-summarization-in-machine-learning-3d27ccf18a9f">
						<img src="{{asset('fontEnd/images/g2.jpeg')}}" alt="" >
						<div class="mask">
							<h4>Towards Data Science</h4>
							<p>A Quick Introduction to Text Summarization in Machine Learning</p>

						</div></a>
				</div>
				<div class="view view-seventh">
					<a href="http://www.abigailsee.com/2017/04/16/taming-rnns-for-better-summarization.html">
						<img src="{{asset('fontEnd/images/g3.png')}}" alt="" >
						<div class="mask">
							<h4>Medium</h4>
							<p>Unsupervised Text Summarization using Sentence Embeddings</p>

						</div></a>
				</div>
		<div class="clearfix"></div>
				<div class="view view-seventh">
					<a href="https://machinelearningmastery.com/gentle-introduction-text-summarization/">
						<img src="{{asset('fontEnd/images/g3.jpg')}}" alt="" >
						<div class="mask">
							<h4>Machine Learning Mastery</h4>
							<p>A Gentle Introduction to Text Summarization</p>

						</div></a>
				</div>
				<div class="view view-seventh">
					<a href="https://www.analyticsvidhya.com/blog/2018/11/introduction-text-summarization-textrank-python/">
						<img src="{{asset('fontEnd/images/g4.png')}}" alt="" >
						<div class="mask">
							<h4>Analytics Vidhya</h4>
							<p>An Introduction to Text Summarization using the TextRank Algorithm (with Python implementation)</p>

						</div></a>
				</div>
				<div class="view view-seventh">
					<a href="https://hackernoon.com/text-summarization-using-keras-models-366b002408d9">
						<img src="{{asset('fontEnd/images/g5.jpeg')}}" alt="" >
						<div class="mask">
							<h4>Hacker Noon</h4>
							<p>Text Summarization Using Keras Models</p>

						</div></a>
				</div>

				<div class="clearfix"></div>
	</div>
</div>
<!-- //our facilities -->
<!-- features -->
<div class="features">
	<div class="container">
		<h3 class="tittle">FEATURES</h3> 

		<div class="col-md-12 features-right">
			<h4>Bengali Text Summarization </h4>
				<p>Bengali Text Summarization is a web application which not only provides the summary both of the bengali and english document
					but also provides the useful resource for learning both of the methodology of extractive and abstractive summarization.Here students can
				study, provide their thesis work and finally integrate their thesis result to upgrade the existing summarization result.</p>

		</div>
		<div class="clearfix"></div>
	</div>
</div>
@endsection