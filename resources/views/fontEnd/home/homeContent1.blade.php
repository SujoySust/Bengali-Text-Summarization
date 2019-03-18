@extends('fontEnd.master')

@section('mainContentShow')

<div class="grid_10">

<div class="Box-body p-6">
<h2>Text summarization</h2>
<p>Text summarization using sequence to sequence model in TensorFlow.</p>
<h2>Introduction</h2>
<p>This repository is a demonstration of abstractive summarization of news article exploiting TensorFlow <a href="https://www.tensorflow.org/tutorials/seq2seq/" rel="nofollow">sequence to sequence model</a>. This model incorporates attention mechanism and uses <a href="http://colah.github.io/posts/2015-08-Understanding-LSTMs/" rel="nofollow">LSTM cell</a> as both encoder and decoder.</p>
<p><a target="_blank" rel="noopener noreferrer" href="https://github.com/hengluchang/newsum/blob/master/seq2seq.PNG"><img src="https://github.com/hengluchang/newsum/raw/master/seq2seq.PNG" alt="" style="max-width:100%;"></a></p>
<!-- <p>This model is trained on one million Associated Press Worldstream news stories from <a href="https://catalog.ldc.upenn.edu/LDC2005T12" rel="nofollow">English Gigaword second edition</a>. The examples below are based on the model trained on AWS EC2 g2.2xlarge instance for 10 epochs, which took around 20 hours.</p>
<p>For more detailed information, please see our project research paper: <a href="https://github.com/hengluchang/newsum/blob/master/headline-generation-recurrent.pdf">Headline Generation Using Recurrent Neural Network</a>.</p>
<h2><a id="user-content-examples" class="anchor" aria-hidden="true" href="#examples"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Examples</h2>
<h3><a id="user-content-news-1" class="anchor" aria-hidden="true" href="#news-1"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a><a href="https://www.highbeam.com/doc/1A1-D8SKOI7O0.html" rel="nofollow">News 1</a></h3>
<p>News: A roadside bomb killed five people Thursday near a shelter used as a police recruiting center in northeast Baghdad, police said.</p>
<p>Actual headline: Iraqi police: Bomb kills 5 near police recruiting center in northeast Baghdad</p>
<p>Predicted headline: URGENT Explosion kills five people in Baghdad</p>
<h3><a id="user-content-news-2" class="anchor" aria-hidden="true" href="#news-2"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a><a href="https://www.highbeam.com/doc/1A1-D8SNBQJ83.html" rel="nofollow">News 2</a></h3>
<p>News: The euro hit a record high against the dollar Monday in Asia as concerns over the U.S. subprime mortgage crisis remain a heavy weight on the greenback.</p>
<p>Actual headline: Euro hits record high versus dollar in Asian trading</p>
<p>Predicted headline: Euro hits record high against dollar</p>
<h2><a id="user-content-how-to-run" class="anchor" aria-hidden="true" href="#how-to-run"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>How to run</h2>
<p>For demonstration, we use the <a href="https://catalog.ldc.upenn.edu/desc/addenda/LDC2003T05.gz" rel="nofollow">sample file</a> (a very small portion of English Gigaword) from LDC as our dataset to train our model. If you want to reproduce the results like the above examples, larger training set is necessary.  You can download the trained model parameters which was trained on a larger portion on Gigaword by following the instructions in the <em>Download vocabs and trained model parameters</em> section below. The whole English Gigaword can be obtained from university libraries.</p>
<h3><a id="user-content-pre-req" class="anchor" aria-hidden="true" href="#pre-req"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Pre-req</h3>
<ul>
<li>Install Python 3</li>
<li>Download deep-news-summarization</li>
</ul>
<pre><code>$ git clone https://github.com/hengluchang/deep-news-summarization.git
</code></pre>
<ul>
<li>Install TensorFlow 0.12, pandas, Numpy, nltk, and requests</li>
</ul>
<pre><code>$ pip install -r requirements.txt
</code></pre>
<ul>
<li>Create two folders named "working_dir" and "output" under the deep-news-summarization folder.</li>
</ul>
<pre><code>$ cd deep-news-summarization
$ mkdir -p working_dir output
</code></pre>
<h3><a id="user-content-download-vocabs-and-trained-model-parameters" class="anchor" aria-hidden="true" href="#download-vocabs-and-trained-model-parameters"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Download vocabs and trained model parameters</h3>
<ul>
<li>Run download_vocabs_and_trained_params.py file. This will download encoder and decoder vocabularies
and trained model parameters to working_dir folder.</li>
</ul>
<pre><code>$ python download_vocabs_and_trained_params.py ./working_dir
</code></pre>
<ul>
<li>Go to Interactive testing section below to reproduce the results as the examples above.</li>
</ul>
<h3><a id="user-content-train-your-own-summarizer" class="anchor" aria-hidden="true" href="#train-your-own-summarizer"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Train your own summarizer</h3>
<ul>
<li>Set "mode = train" in seq2seq.ini file.</li>
<li>Run split_data.py file to split the dataset into training, evaluation, and testing sets. train_enc.txt, eval_enc.txt, test_enc, train_dec.txt, eval_dec.txt, and test_dec.txt total of six files will be created under ./dataset.</li>
</ul>
<pre><code>$ python split_data.py
</code></pre>
<ul>
<li>Run execute.py file. This will create vocab80000_enc.txt, vocab80000_dec.txt, and checkpoint data under ./working_dir. If you use your own dataset, optimizing bucket sizes to minimize padding in execute.py file can help to get better results. Also, keep training the model until the <a href="https://www.youtube.com/watch?v=OHyVNCvnsTo" rel="nofollow">preplexity</a> of the evaluation sets are under 10 for better performances.</li>
</ul>
<pre><code>$ python execute.py
</code></pre>
<h3><a id="user-content-testing" class="anchor" aria-hidden="true" href="#testing"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Testing</h3>
<ul>
<li>Set "mode = test" in seq2seq.ini file.</li>
<li>Run execute.py file. This will read the model parameters (seq2seq.ckpt-XXXXX) into your model and create predicted_test_headline.txt under ./output.</li>
</ul>
<pre><code>$ python execute.py
</code></pre>
<ul>
<li>Run evaluation.py file to get <a href="https://en.wikipedia.org/wiki/BLEU" rel="nofollow">BLEU</a> scores between actual headlines and predicted headlines. This will create BLEU.txt file.</li>
</ul>
<pre><code>$ python evaluation.py
</code></pre>
<h3><a id="user-content-interactive-testing" class="anchor" aria-hidden="true" href="#interactive-testing"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Interactive testing</h3>
<ul>
<li>Set "mode = interactive" in seq2seq.ini file.</li>
<li>Run execute.py. This will read the model parameters (seq2seq.ckpt-XXXXX) into your model and ask user for an input.</li>
</ul>
<pre><code>$ python execute.py
</code></pre> -->
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
</article>
      </div>

@endsection