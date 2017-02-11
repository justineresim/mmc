<?php /* Template Name: Global Styling */ get_header(); ?>

	<main role="main" class="g-main g-light g-lg-padding">

        <div class="g-container-lg">

			<h1><?php the_title(); ?></h1>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                    <div class="content-editor">

					   <?php the_content(); ?>

                    </div>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>

			<div class="testing-body-container">
                <h2>Text Styling</h2>
                <hr>
                <h1>h1 Heading</h1>
                <h2>h2 Heading</h2>
                <h3>h3 Heading</h3>
                <h4>h4 Heading</h4>
                <h5>h5 Heading</h5>
                <h6>h6 Heading</h6>
       

                <h2>h2 Heading</h2>
                <p><em>Proin maximus sapien et imperdiet ultricies.</em> Phasellus tempor urna sit amet erat congue laoreet. Praesent sodales tempus fermentum. Duis hendrerit leo eget ipsum imperdiet, vitae dapibus ante pharetra. Ut quis leo posuere, mollis ex quis, pulvinar neque.</p>       
                <p>Suspendisse et ante pretium, pulvinar massa non, <b>faucibus dui</b>. Nullam aliquam pulvinar lectus. <a>Proin tincidunt eros dolor</a>, at tempus ante commodo quis. Morbi et rhoncus odio. Duis sit amet tortor id metus tempor mollis in ut dui. In vel neque et odio porta pharetra at a lectus. Aenean porttitor tincidunt ipsum, et mollis massa gravida non. Morbi id nunc urna. Maecenas eleifend dui ac imperdiet tristique.</p>
                <h2>h2 Heading</h2>
                <h3>h3 Heading</h3>
                <p>Suspendisse et ante pretium, pulvinar massa non, <b>faucibus dui</b>. Nullam aliquam pulvinar lectus. <a>Proin tincidunt eros dolor</a>, at tempus ante commodo quis. Morbi et rhoncus odio. Duis sit amet tortor id metus tempor mollis in ut dui. In vel neque et odio porta pharetra at a lectus. Aenean porttitor tincidunt ipsum, et mollis massa gravida non. Morbi id nunc urna. Maecenas eleifend dui ac imperdiet tristique.</p>
                <hr>
                <p>Proin aliquam, ante eu faucibus suscipit, mauris nisl porttitor metus, eget feugiat ex elit ac dui. Phasellus vestibulum metus dolor, eget suscipit elit iaculis mattis. Ut imperdiet velit in neque ullamcorper sollicitudin. Pellentesque commodo nec velit tincidunt ultricies. Aliquam eleifend nisl mattis purus varius iaculis. Nunc pretium massa ipsum, ut lobortis neque pharetra imperdiet.</p>
                <h3>h3 Heading</h3>
                <h4>h4 Heading</h4>
                <p>Suspendisse et ante pretium, pulvinar massa non, <b>faucibus dui</b>. Nullam aliquam pulvinar lectus. <a>Proin tincidunt eros dolor</a>, at tempus ante commodo quis. Morbi et rhoncus odio. Duis sit amet tortor id metus tempor mollis in ut dui. In vel neque et odio porta pharetra at a lectus. Aenean porttitor tincidunt ipsum, et mollis massa gravida non. Morbi id nunc urna. Maecenas eleifend dui ac imperdiet tristique.</p>
                <p><em>Proin maximus sapien et imperdiet ultricies.</em> Phasellus tempor urna sit amet erat congue laoreet. Praesent sodales tempus fermentum. Duis hendrerit leo eget ipsum imperdiet, vitae dapibus ante pharetra. Ut quis leo posuere, mollis ex quis, pulvinar neque.</p>       

                <hr class="g-secondary"> 

                <p>Regular paragraph styling</p>
                <p class="g-color-dark">Dark text color</p>
                <p class="g-color-light">Light text color</p>
                <p><strong>Bold body font</strong></p>
                <p><em>Italic body font</em></p>
                <p><em><strong>Bold Italic Font</strong></em></p>
                <p class="g-font-small">Small body font</p>
                <p class="g-font-smaller">Smaller body font</p>
                <p class="g-font-large">Large body font</p>
                <p class="g-font-larger">Larger body font</p>
                <p class="g-font-largest">Largest body font</p>

<pre><xmp><p>Regular paragraph styling</p>
<p class="g-color-dark">Dark text color</p>
<p class="g-color-light">Light text color</p>
<p><strong>Bold body font</strong></p>
<p><em>Italic body font</em></p>
<p><em><strong>Bold Italic Font</strong></em></p>
<p class="g-font-small">Small body font</p>
<p class="g-font-smaller">Smaller body font</p>
<p class="g-font-large">Large body font</p>
<p class="g-font-larger">Larger body font</p>
<p class="g-font-largest">Largest body font</p></xmp></pre>


                <h3 id="links">Links</h3>
                <hr>

                <h3><a>Heading Link</a></h3>
                <a>Standard link</a>
                <br>
                <a>Link with icon right<span class="ion-search g-icon-right"></span></a>
                <br>
                <a><span class="ion-plus g-icon-left"></span>Add an Application</a>
                <br>
                <a class="g-link-2">Secondary Link Style</a>
                <br>
                <a class="g-link-3">Tertiary Link Style</a>
                <br><br>
                Icon link: <a title="Expand" class="ion-plus-circled g-icon-link"></a>

<pre><xmp><h3><a>Heading Link</a></h3>
<a>Standard link</a>
<br>
<a>Link with icon right<span class="ion-search g-icon-right"></span></a>
<br>
<a><span class="ion-plus g-icon-left"></span>Add an Application</a>
<br>
<a class="g-link-2">Secondary Link Style</a>
<br>
<a class="g-link-3">Tertiary Link Style</a>
<br><br>
Icon link: <a title="Expand" class="ion-plus-circled g-icon-link"></a></xmp></pre>

            </section>

            <section id="colours">

                <h2>Colours</h2>
                <hr>  

                <h3 id="brandcolours">Brand Colours</h3>
                <hr>
                <div class="row margin-bottom">
                    <div class="col-1of3">
                        <div class="testing-bg" style="background-color: #FF0000"></div>
                        <p class="g-text-center">#FF0000</p>
                    </div>
                    <div class="col-1of3">
                        <div class="testing-bg" style="background-color: #8C006E"></div>
                        <p class="g-text-center">#8C006E</p>
                    </div>
                    <div class="col-1of3">
                        <div class="testing-bg" style="background-color: #197592"></div>
                        <p class="g-text-center">#197592</p>
                    </div>
                </div>

                <h3 id="neutrals">Neutrals</h3>
                <hr>
                <div class="row no-gutter">
                    <div class="col-1of8">
                        <div class="testing-bg" style="background-color: #000000"></div>
                        <p class="g-text-center">#000000</p>
                    </div>
                    <div class="col-1of8">
                        <div class="testing-bg" style="background-color: #414141"></div>
                        <p class="g-text-center">#414141</p>
                    </div>
                    <div class="col-1of8">
                        <div class="testing-bg" style="background-color: #5E5E5E"></div>
                        <p class="g-text-center">#5E5E5E</p>
                    </div>
                     <div class="col-1of8">
                        <div class="testing-bg" style="background-color: #7A7A7A"></div>
                        <p class="g-text-center">#7A7A7A</p>
                    </div> 
                    <div class="col-1of8">
                        <div class="testing-bg" style="background-color: #979797"></div>
                        <p class="g-text-center">#979797</p>
                    </div> 
                    <div class="col-1of8">
                        <div class="testing-bg" style="background-color: #CCCCCC"></div>
                        <p class="g-text-center">#CCCCCC</p>
                    </div> 
                    <div class="col-1of8">
                        <div class="testing-bg" style="background-color: #E6E6E6"></div>
                        <p class="g-text-center">#E6E6E6</p>
                    </div> 
                    <div class="col-1of8">
                        <div class="testing-bg" style="background-color: #F4F4F4"></div>
                        <p class="g-text-center">#F4F4F4</p>
                    </div> 
                    
                </div>

            </section>

            <section id="resources">

                <h2>External Resources</h2>
                <hr>

                <h3 id="iconfont">Icon Font - Ion Icons</h3>
                <hr>

                <p><a href="http://ionicons.com/" target="_blank">http://ionicons.com/</a></p>

                <h3 id="iconfont">Masonry - project card grid</h3>
                <hr>

                <p><a href="http://masonry.desandro.com/" target="_blank">http://masonry.desandro.com/</a>
                <br>
                <a href="http://imagesloaded.desandro.com/" target="_blank"> http://imagesloaded.desandro.com/</a></p>
                
            
            </section>

            <section id="tables">

                <h2>Tables</h2>
                <hr>

                <table class="g-table">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@markotto</td>
                        </tr>
                        <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@thorton</td>
                        </tr>
                        <tr>
                            <td>Larry</td>
                            <td>Bird</td>
                            <td>@twitterbird</td>
                        </tr>
                    </tbody>
                </table>

<pre><xmp><table class="g-table">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>@markotto</td>
        </tr>
        <tr>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@thorton</td>
        </tr>
        <tr>
            <td>Larry</td>
            <td>Bird</td>
            <td>@twitterbird</td>
        </tr>
    </tbody>
</table></xmp></pre>

                
                <h3 id="responsivetables">Responsive Tables</h3>
                <hr>

                <table class="g-table g-table-striped g-tablet-stacked">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a class="g-open-link ion-plus-circled"></a>Mark</td>
                            <td>Otto</td>
                            <td>@markotto</td>
                        </tr>
                        <tr>
                            <td><a class="g-open-link ion-plus-circled"></a>Jacob</td>
                            <td>Thornton</td>
                            <td>@thorton</td>
                        </tr>
                        <tr>
                            <td><a class="g-open-link ion-plus-circled"></a>Larry</td>
                            <td>Bird</td>
                            <td>@twitterbird</td>
                        </tr>
                    </tbody>
                </table>

<pre><xmp><table class="g-table g-table-striped g-tablet-stacked">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a class="g-open-link ion-plus-circled"></a>Mark</td>
            <td>Otto</td>
            <td>@markotto</td>
        </tr>
        <tr>
            <td><a class="g-open-link ion-plus-circled"></a>Jacob</td>
            <td>Thornton</td>
            <td>@thorton</td>
        </tr>
        <tr>
            <td><a class="g-open-link ion-plus-circled"></a>Larry</td>
            <td>Bird</td>
            <td>@twitterbird</td>
        </tr>
    </tbody>
</table></xmp></pre>

            </section>

            <section id="lists">

                <h2 id="lists">Lists</h2>
                <hr>

                <ul>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Sed vel pellentesque</li>
                    <li>Proin pulvinar</li>
                    <li>Aliquam
                        <ul>
                            <li>Nullam</li>
                            <li>Donec ultricies</li>
                        </ul>
                    </li>
                    <li>Proin</li>
                </ul>

<pre><xmp><ul>
    <li>Lorem ipsum dolor sit amet</li>
    <li>Sed vel pellentesque</li>
    <li>Proin pulvinar</li>
    <li>Aliquam
        <ul>
            <li>Nullam</li>
            <li>Donec ultricies</li>
        </ul>
    </li>
    <li>Proin</li>
</ul></xmp></pre>

                <h3 id="orderedlists">Ordered Lists</h3>
                <hr>

                <ol>
                    <li>Sed pretium</li>
                    <li>Fusce interdum pharetra risus
                        <ol>
                            <li>Aliquam erat volutpat</li>
                            <li>Proin eu metus tellu</li>
                        </ol>
                    </li>
                    <li>Phasellus</li>
                </ol>

<pre><xmp><ol>
    <li>Sed pretium</li>
    <li>Fusce interdum pharetra risus
        <ol>
            <li>Aliquam erat volutpat</li>
            <li>Proin eu metus tellu</li>
        </ol>
    </li>
    <li>Phasellus</li>
</ol></xmp></pre>

            </section>

            <section id="buttons">

                <h2>Buttons</h2>
                <hr>

                <a class="g-btn">Primary Button</a>
                <a class="g-btn g-active">Active State</a>
                <a class="g-btn g-disabled">Disabled</a>
                <br><br>
                <a class="g-btn g-btn-block">Primary Block Button</a>
                <br><br>
                <a class="g-btn g-btn-sm">Smaller Button</a>
                <br><br>
                <a class="g-btn g-btn-xs">XS Button</a>
                <br><br>
                <a class="g-btn"><span class="ion-edit g-icon-left"></span>Button with icon</a>
                <br><br>
                <a class="g-btn"><span class="ion-edit"></span></a>
                <br><br>

<pre><xmp><a class="g-btn">Primary Button</a>
<a class="g-btn g-active">Active State</a>
<a class="g-btn g-disabled">Disabled</a>
<br><br>
<a class="g-btn g-btn-block">Primary Block Button</a>
<br><br>
<a class="g-btn g-btn-sm">Smaller Button</a>
<br><br>
<a class="g-btn g-btn-xs">XS Button</a>
<br><br>
<a class="g-btn"><span class="ion-edit g-icon-left"></span>Button with icon</a>
<br><br>
<a class="g-btn"><span class="ion-edit"></span></a>
<br><br></xmp></pre>

                <a class="g-btn-2">Button 2</a>
                <a class="g-btn-2 g-active">Active State</a>
                <a class="g-btn-2 g-disabled">Disabled</a>
                <br><br>
                <a class="g-btn-3">Button 3</a>
                <a class="g-btn-3 g-active">Active State</a>
                <a class="g-btn-3 g-disabled">Disabled</a>
                <br><br>
                <a class="g-btn-4">Button 4</a>
                <a class="g-btn-4 g-active">Active State</a>
                <a class="g-btn-4 g-disabled">Disabled</a>
                <br><br>


<pre><xmp><a class="g-btn-2">Button 2</a>
<a class="g-btn-2 g-active">Active State</a>
<a class="g-btn-2 g-disabled">Disabled</a>
<br><br>
<a class="g-btn-3">Button 3</a>
<a class="g-btn-3 g-active">Active State</a>
<a class="g-btn-3 g-disabled">Disabled</a>
<br><br>
<a class="g-btn-4">Button 4</a>
<a class="g-btn-4 g-active">Active State</a>
<a class="g-btn-4 g-disabled">Disabled</a>
<br><br></xmp></pre>

            </section>

            <section id="forms">

                <h2>Forms</h2>
                <hr>

                <form class="g-form">
                    <div class="g-form-group g-error-state">
                        <label for="exampleInput1">First Name:</label>
                        <input type="text" class="g-form-control" id="exampleInput1" placeholder="First Name">
                        <p>Please fill out the required field</p>
                    </div>
                    <div class="g-form-group">
                        <label>Company Name:</label>
                        <select class="g-form-control">
                            <option value="1">Company ABC</option>
                            <option value="2">Company Inc.</option>
                            <option value="3">Company Name</option>
                            <option value="4">Another Company</option>
                        </select>
                    </div>
                    <div class="g-form-group">
                        <label for="exampleQuestion">How can we help you?</label>
                        <textarea rows="8" class="g-form-control" id="exampleQuestion" placeholder="Question"></textarea>
                    </div>
                    <div class="g-form-group g-checkbox">
                        <div class="g-checkbox-heading">Select all that apply:</div>
                        <input type="checkbox" id="checkbox1">
                        <label for="checkbox1"><span>Check me out</span></label>
                        <input type="checkbox" id="checkbox2">
                        <label for="checkbox2"><span>Check me out</span></label>
                        <input type="checkbox" id="checkbox3">
                        <label for="checkbox3"><span>Check me out</span></label>
                    </div>
                    <div class="g-radio-container g-form-group">
                        <div class="g-radio-heading">Please select one:</div>
                        <div>
                            <input id="radio-1" class="g-radio" name="g-radio-group" type="radio" checked>
                            <label for="radio-1" class="g-radio-label">First Choice</label>
                        </div>
                        <div>
                            <input id="radio-2" class="g-radio"name="g-radio-group" type="radio">
                            <label for="radio-2" class="g-radio-label">Second Choice</label>
                        </div>
                        <div>
                            <input id="radio-3" class="g-radio" name="g-radio-group" type="radio">
                            <label for="radio-3" class="g-radio-label">Third Choice</label>
                        </div>
                    </div>
                    <div class="g-form-group">
                        <label>Favorite programming language:</label>
                        <input class="g-form-control">
                    </div>
                    <div class="g-form-group">
                        <label>Search</label>
                        <input type="text" class="g-form-control g-search-input" id="search" placeholder="Search by Name">
                    </div>
                </form>

<pre><xmp><form class="g-form">
    <div class="g-form-group g-error-state">
        <label for="exampleInput1">First Name:</label>
        <input type="text" class="g-form-control" id="exampleInput1" placeholder="First Name">
        <p>Please fill out the required field</p>
    </div>
    <div class="g-form-group">
        <label>Company Name:</label>
        <select class="g-form-control">
            <option value="1">Company ABC</option>
            <option value="2">Company Inc.</option>
            <option value="3">Company Name</option>
            <option value="4">Another Company</option>
        </select>
    </div>
    <div class="g-form-group">
        <label for="exampleQuestion">How can we help you?</label>
        <textarea rows="8" class="g-form-control" id="exampleQuestion" placeholder="Question"></textarea>
    </div>
    <div class="g-form-group g-checkbox">
        <div class="g-checkbox-heading">Select all that apply:</div>
        <input type="checkbox" id="checkbox1">
        <label for="checkbox1"><span>Check me out</span></label>
        <input type="checkbox" id="checkbox2">
        <label for="checkbox2"><span>Check me out</span></label>
        <input type="checkbox" id="checkbox3">
        <label for="checkbox3"><span>Check me out</span></label>
    </div>
    <div class="g-radio-container g-form-group">
        <div class="g-radio-heading">Please select one:</div>
        <div>
            <input id="radio-1" class="g-radio" name="g-radio-group" type="radio" checked>
            <label for="radio-1" class="g-radio-label">First Choice</label>
        </div>
        <div>
            <input id="radio-2" class="g-radio"name="g-radio-group" type="radio">
            <label for="radio-2" class="g-radio-label">Second Choice</label>
        </div>
        <div>
            <input id="radio-3" class="g-radio" name="g-radio-group" type="radio">
            <label for="radio-3" class="g-radio-label">Third Choice</label>
        </div>
    </div>
    <div class="g-form-group">
        <label>Favorite programming language:</label>
        <input class="g-form-control">
    </div>
    <div class="g-form-group">
        <label>Search</label>
        <input type="text" class="g-form-control g-search-input" id="search" placeholder="Search by Name">
    </div>
</form></xmp></pre>

                <h3 id="gridforms">Forms using grids</h3>
                <hr>

                <form class="g-form">
                    <div class="g-hidden-labels">
                        <div class="row">
                            <div class="g-form-group col-1of2">
                                <label for="exampleInput1">First Name:</label>
                                <input type="text" class="g-form-control" id="exampleInput1" placeholder="First Name">
                            </div>
                            <div class="g-form-group col-1of2">
                                <label for="exampleInput1">Last Name:</label>
                                <input type="text" class="g-form-control" id="exampleInput2" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="g-form-group col-1of3">
                                <label>Select one:</label>
                                <select class="g-form-control">
                                    <option value="1">Sort by Date</option>
                                    <option value="2">Title Ascending</option>
                                    <option value="3">Title Descending</option>
                                </select>
                            </div>
                            <div class="g-form-group col-1of3">
                                <label>Select one:</label>
                                <select class="g-form-control">
                                    <option value="1">Sort by Date</option>
                                    <option value="2">Title Ascending</option>
                                    <option value="3">Title Descending</option>
                                </select>
                            </div>
                            <div class="g-form-group col-1of3">
                                <label>Select one:</label>
                                <select class="g-form-control">
                                    <option value="1">Sort by Date</option>
                                    <option value="2">Title Ascending</option>
                                    <option value="3">Title Descending</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>

<pre><xmp><form class="g-form">
    <div class="g-hidden-labels">
        <div class="row">
            <div class="g-form-group col-1of2">
                <label for="exampleInput1">First Name:</label>
                <input type="text" class="g-form-control" id="exampleInput1" placeholder="First Name">
            </div>
            <div class="g-form-group col-1of2">
                <label for="exampleInput1">Last Name:</label>
                <input type="text" class="g-form-control" id="exampleInput2" placeholder="Last Name">
            </div>
        </div>
        <div class="row">
            <div class="g-form-group col-1of3">
                <label>Select one:</label>
                <select class="g-form-control">
                    <option value="1">Sort by Date</option>
                    <option value="2">Title Ascending</option>
                    <option value="3">Title Descending</option>
                </select>
            </div>
            <div class="g-form-group col-1of3">
                <label>Select one:</label>
                <select class="g-form-control">
                    <option value="1">Sort by Date</option>
                    <option value="2">Title Ascending</option>
                    <option value="3">Title Descending</option>
                </select>
            </div>
            <div class="g-form-group col-1of3">
                <label>Select one:</label>
                <select class="g-form-control">
                    <option value="1">Sort by Date</option>
                    <option value="2">Title Ascending</option>
                    <option value="3">Title Descending</option>
                </select>
            </div>
        </div>
    </div>
</form></xmp></pre>

                <h3 id="inlineforms">Inline Forms</h3>
                <hr>

                <form class="g-form">
                    <div class="g-inline-form">
                        <div class="g-form-group">
                            <label for="exampleInput1">First Name:</label>
                            <input type="text" class="g-form-control" id="exampleInput1" placeholder="First Name">
                        </div>
                        <div class="g-form-group">
                            <label for="exampleInput1">Last Name:</label>
                            <input type="text" class="g-form-control" id="exampleInput2" placeholder="Last Name">
                        </div>
                        <div class="g-form-group">
                            <label>Select one:</label>
                            <select class="g-form-control">
                                <option>Select an Option</option>
                                <option value="1">Sort by Date</option>
                                <option value="2">Title Ascending</option>
                                <option value="3">Title Descending</option>
                            </select>
                        </div>
                        <div class="g-form-group g-checkbox">
                            <div class="g-checkbox-heading">Select all that apply:</div>
                            <input type="checkbox" id="checkbox4">
                            <label for="checkbox4"><span>Option 1</span></label>
                            <input type="checkbox" id="checkbox5">
                            <label for="checkbox5"><span>Another option</span></label>
                            <input type="checkbox" id="checkbox6">
                            <label for="checkbox6"><span>And another!</span></label>
                        </div>
                        <div class="g-radio-container g-form-group">
                            <div class="g-radio-heading">Please select one:</div>
                            <input id="radio-4" class="g-radio" name="g-radio-group" type="radio" checked>
                            <label for="radio-4" class="g-radio-label">First Choice</label>
                            <input id="radio-5" class="g-radio"name="g-radio-group" type="radio">
                            <label for="radio-5" class="g-radio-label">Second Choice</label>
                            <input id="radio-6" class="g-radio" name="g-radio-group" type="radio">
                            <label for="radio-6" class="g-radio-label">Third Choice</label>
                        </div>
                    </div>
                </form>

<pre><xmp><form class="g-form">
    <div class="g-inline-form">
        <div class="g-form-group">
            <label for="exampleInput1">First Name:</label>
            <input type="texte" class="g-form-control" id="exampleInput1" placeholder="First Name">
        </div>
        <div class="g-form-group">
            <label for="exampleInput1">Last Name:</label>
            <input type="text" class="g-form-control" id="exampleInput2" placeholder="Last Name">
        </div>
        <div class="g-form-group">
            <label>Select one:</label>
            <select class="g-form-control">
                <option>Select an Option</option>
                <option value="1">Sort by Date</option>
                <option value="2">Title Ascending</option>
                <option value="3">Title Descending</option>
            </select>
        </div>
        <div class="row">
            <div class="col-1of1">
                <div class="g-form-group g-checkbox">
                    <div class="g-checkbox-heading">Select all that apply:</div>
                    <input type="checkbox" id="checkbox4">
                    <label for="checkbox4"><span>Option 1</span></label>
                    <input type="checkbox" id="checkbox5">
                    <label for="checkbox5"><span>Another option</span></label>
                    <input type="checkbox" id="checkbox6">
                    <label for="checkbox6"><span>And another!</span></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1of1">
                <div class="g-radio-container g-form-group">
                    <div class="g-radio-heading">Please select one:</div>
                    <input id="radio-4" class="g-radio" name="g-radio-group" type="radio" checked>
                    <label for="radio-4" class="g-radio-label">First Choice</label>
                    <input id="radio-5" class="g-radio"name="g-radio-group" type="radio">
                    <label for="radio-5" class="g-radio-label">Second Choice</label>
                    <input id="radio-6" class="g-radio" name="g-radio-group" type="radio">
                    <label for="radio-6" class="g-radio-label">Third Choice</label>
                </div>
            </div>
        </div>
    </div>
</form></xmp></pre>

                <h3 id="horizontalforms">Horizontal Forms</h3>
                <hr>

                <form class="g-form">
                    <div class="g-form-horizontal">
                        <div class="g-form-group row">
                            <label class="col-1of5" for="exampleInput1">First Name:</label>
                            <div class="col-4of5">
                                <input type="text" class="g-form-control" id="exampleInput1" placeholder="First Name">
                            </div>
                        </div>
                        <div class="g-form-group row">
                            <div class="col-1of5">
                                <label for="exampleInput2">Last Name:</label>
                            </div>
                            <div class="col-4of5">
                                <input type="fname" class="g-form-control" id="exampleInput2" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="g-form-group row">
                            <div class="col-1of5">
                                <label>Select one:</label>
                            </div>
                            <div class="col-4of5">
                                <select class="g-form-control">
                                    <option>Select an Option</option>
                                    <option value="1">Sort by Date</option>
                                    <option value="2">Title Ascending</option>
                                    <option value="3">Title Descending</option>
                                </select>
                            </div>
                        </div>
                        <div class="g-form-group row">
                            <div class="col-1of5">
                                <div class="g-checkbox-heading">Select all that apply:</div>
                            </div>
                            <div class="col-4of5">
                                <div class="g-checkbox">  
                                    <input type="checkbox" id="checkbox7">
                                    <label for="checkbox7"><span>Option 1</span></label>
                                    <input type="checkbox" id="checkbox8">
                                    <label for="checkbox8"><span>Another option</span></label>
                                    <input type="checkbox" id="checkbox9">
                                    <label for="checkbox9"><span>And another!</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="g-form-group row">
                            <div class="col-1of5">
                                <div class="g-radio-heading">Please select one:</div>
                            </div>
                            <div class="col-4of5">
                                <div class="g-radio-container">
                                    <input id="radio-7" class="g-radio" name="g-radio-group" type="radio" checked>
                                    <label for="radio-7" class="g-radio-label">First Choice</label>
                                    <input id="radio-8" class="g-radio"name="g-radio-group" type="radio">
                                    <label for="radio-8" class="g-radio-label">Second Choice</label>
                                    <input id="radio-9" class="g-radio" name="g-radio-group" type="radio">
                                    <label for="radio-9" class="g-radio-label">Third Choice</label>
                                </div>
                            </div>
                        </div>
                         <div class="g-form-group row">
                            <div class="col-1of5">
                                <div class="g-radio-heading">Inline example:</div>
                            </div>
                            <div class="col-4of5 g-inline-form">
                                <div class="g-radio-container">
                                    <input id="radio-10" class="g-radio" name="g-radio-group" type="radio" checked>
                                    <label for="radio-10" class="g-radio-label">First Choice</label>
                                    <input id="radio-11" class="g-radio"name="g-radio-group" type="radio">
                                    <label for="radio-11" class="g-radio-label">Second Choice</label>
                                    <input id="radio-12" class="g-radio" name="g-radio-group" type="radio">
                                    <label for="radio-12" class="g-radio-label">Third Choice</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

<pre><xmp><form class="g-form">
    <div class="g-form-horizontal">
        <div class="g-form-group row">
            <label class="col-1of5" for="exampleInput1">First Name:</label>
            <div class="col-4of5">
                <input type="text" class="g-form-control" id="exampleInput1" placeholder="First Name">
            </div>
        </div>
        <div class="g-form-group row">
            <div class="col-1of5">
                <label for="exampleInput2">Last Name:</label>
            </div>
            <div class="col-4of5">
                <input type="text" class="g-form-control" id="exampleInput2" placeholder="Last Name">
            </div>
        </div>
        <div class="g-form-group row">
            <div class="col-1of5">
                <label>Select one:</label>
            </div>
            <div class="col-4of5">
                <select class="g-form-control">
                    <option>Select an Option</option>
                    <option value="1">Sort by Date</option>
                    <option value="2">Title Ascending</option>
                    <option value="3">Title Descending</option>
                </select>
            </div>
        </div>
        <div class="g-form-group row">
            <div class="col-1of5">
                <div class="g-checkbox-heading">Select all that apply:</div>
            </div>
            <div class="col-4of5">
                <div class="g-checkbox">  
                    <input type="checkbox" id="checkbox7">
                    <label for="checkbox7"><span>Option 1</span></label>
                    <input type="checkbox" id="checkbox8">
                    <label for="checkbox8"><span>Another option</span></label>
                    <input type="checkbox" id="checkbox9">
                    <label for="checkbox9"><span>And another!</span></label>
                </div>
            </div>
        </div>
        <div class="g-form-group row">
            <div class="col-1of5">
                <div class="g-radio-heading">Please select one:</div>
            </div>
            <div class="col-4of5">
                <div class="g-radio-container">
                    <input id="radio-7" class="g-radio" name="g-radio-group" type="radio" checked>
                    <label for="radio-7" class="g-radio-label">First Choice</label>
                    <input id="radio-8" class="g-radio"name="g-radio-group" type="radio">
                    <label for="radio-8" class="g-radio-label">Second Choice</label>
                    <input id="radio-9" class="g-radio" name="g-radio-group" type="radio">
                    <label for="radio-9" class="g-radio-label">Third Choice</label>
                </div>
            </div>
        </div>
         <div class="g-form-group row">
            <div class="col-1of5">
                <div class="g-radio-heading">Inline example:</div>
            </div>
            <div class="col-4of5 g-inline-form">
                <div class="g-radio-container">
                    <input id="radio-10" class="g-radio" name="g-radio-group" type="radio" checked>
                    <label for="radio-10" class="g-radio-label">First Choice</label>
                    <input id="radio-11" class="g-radio"name="g-radio-group" type="radio">
                    <label for="radio-11" class="g-radio-label">Second Choice</label>
                    <input id="radio-12" class="g-radio" name="g-radio-group" type="radio">
                    <label for="radio-12" class="g-radio-label">Third Choice</label>
                </div>
            </div>
        </div>
    </div>
</form></xmp></pre>

            </section>

            <section id="pagination">

                <h2>Pagination</h2>
                <hr>  

                <div class="g-pagination">
                    <a class="g-prev"><span class="ion-chevron-left"></span></a>
                    <a class="g-nums">1</a>
                    <a class="g-nums">2</a>
                    <a class="g-nums">3</a>
                    <a class="g-nums">4</a>
                    <a class="g-nums g-active">5</a>
                    <a class="g-next g-disabled"><span class="ion-chevron-right"></span></a>
                </div>

<pre><xmp><div class="g-pagination">
    <a class="g-prev"><span class="ion-chevron-left"></span></a>
    <a class="g-nums">1</a>
    <a class="g-nums">2</a>
    <a class="g-nums">3</a>
    <a class="g-nums">4</a>
    <a class="g-nums g-active">5</a>
    <a class="g-next g-disabled"><span class="ion-chevron-right"></span></a>
</div></xmp></pre>

        </section>
        <!-- /section -->

        <section id="cards">

            <h2>Featured Products</h2>
            <hr>

            <div class="row margin-bottom">
                <div class="col-1of5 sm-1of2">
                    <div class="g-card">
                        <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/project-1.jpg)"></a>
                        <div class="g-card-content">
                            <div class="g-clearfix g-card-header">
                                <a rel="leanModal" href="#product" class="g-color-dark g-font-small g-card-title">Little Black Dress</a><br>
                                <a  rel="leanModal" href="#profile" class="g-color-light g-font-smaller">encircled</a>
                            </div>
                            <div class="g-card-footer g-clearfix">
                                <span title="Organic" class="ion-leaf"></span>&nbsp;
                                <span title="Eco-Friendly" class="ion-waterdrop"></span>&nbsp;
                                <a title="Favourites" class="ion-ios-star g-icon-link g-pull-right"></a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="col-1of5 sm-1of2">
                    <div class="g-card">
                        <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/project-2.jpg)"></a>
                        <div class="g-card-content">
                            <div class="g-clearfix g-card-header">
                                <a class="g-color-dark g-font-small g-card-title">Black Nike's</a><br>
                                <a class="g-color-light g-font-smaller">Canadian Inc.</a>
                            </div>
                            <div class="g-card-footer g-clearfix">
                                <span title="Eco-Friendly" class="ion-waterdrop"></span>&nbsp;
                                <span title="Buy Online" class="ion-ios-cart"></span>&nbsp;
                                <a title="Favourites" class="ion-ios-star-outline g-icon-link g-pull-right"></a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="col-1of5 sm-1of2">
                    <div class="g-card">
                        <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/project-3.jpg)"></a>
                        <div class="g-card-content">
                            <div class="g-clearfix g-card-header">
                                <a class="g-color-dark g-font-small g-card-title">Summer Dress</a><br>
                                <a class="g-color-light g-font-smaller">My Great Company</a>
                            </div>
                            <div class="g-card-footer g-clearfix">
                                <span title="Organic" class="ion-leaf"></span>&nbsp;
                                <span title="Eco-Friendly" class="ion-waterdrop"></span>&nbsp;
                                <span title="Vegan" class="ion-ios-paw"></span>&nbsp;
                                <span title="Fair Trade" class="ion-android-globe"></span>&nbsp;
                                <a title="Favourites" class="ion-ios-star-outline g-icon-link g-pull-right"></a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="col-1of5 sm-1of2">
                    <div class="g-card">
                        <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/project-4.jpg)"></a>
                        <div class="g-card-content">
                            <div class="g-clearfix g-card-header">
                                <a class="g-color-dark g-font-small g-card-title">Mens Grey Hoddie</a><br>
                                <a class="g-color-light g-font-smaller">Better Sweater</a>
                            </div>
                            <div class="g-card-footer g-clearfix">
                                <span title="Vegan" class="ion-ios-paw"></span>&nbsp;
                                <span title="Fair Trade" class="ion-android-globe"></span>&nbsp;
                                <img class="g-icon-leaf" src="/wp-content/themes/mmc/img/canadian-leaf.png">
                                <a title="Favourites" class="ion-ios-star-outline g-icon-link g-pull-right"></a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="col-1of5 sm-1of2">
                    <div class="g-card">
                        <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/project-5.jpg)"></a>
                        <div class="g-card-content">
                            <div class="g-clearfix g-card-header">
                                <a class="g-color-dark g-font-small g-card-title">Floral Print Cocktail Dress</a><br>
                                <a class="g-color-light g-font-smaller">Nancy's</a>
                            </div>
                            <div class="g-card-footer g-clearfix">
                                <span title="Organic" class="ion-leaf"></span>&nbsp;
                                <span title="Eco-Friendly" class="ion-waterdrop"></span>&nbsp;
                                <span title="Fair Trade" class="ion-android-globe"></span>&nbsp;
                                <a title="Favourites" class="ion-ios-star-outline g-icon-link g-pull-right"></a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>

            <h2>Featured Products Slider</h2>
            <hr>

             <a class="g-btn g-btn-2 g-btn-xs g-active"><span class="ion-waterdrop"></span>&nbsp;Eco-Friendly</a>
             <a class="g-btn g-btn-2 g-btn-xs"><span class="ion-leaf"></span>&nbsp;Organic</a>
             <a class="g-btn g-btn-2 g-btn-xs"><span class="ion-ios-cart""></span>&nbsp;Buy Online</a>
             <a class="g-btn g-btn-2 g-btn-xs g-active"><span class="ion-ios-paw"></span>&nbsp;Vegan</a>
             <a class="g-btn g-btn-2 g-btn-xs"><span class="ion-android-globe"></span>&nbsp;Fair Trade</a>
             <a class="g-btn g-btn-2 g-btn-xs"><img style="height:13px; display: inline-block;" src="/wp-content/themes/mmc/img/canadian-leaf.png">&nbsp;Made in Canada</a>

             <br><br><br>

            <div class="slider-container">
                <div class="g-card">
                    <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/project-1.jpg)"></a>
                    <div class="g-card-content">
                        <div class="g-clearfix g-card-header">
                            <a class="g-color-dark g-font-small g-card-title">Floral Print Cocktail Dress</a><br>
                            <a class="g-color-light g-font-smaller">Nancy's</a>
                        </div>
                        <div class="g-card-footer g-clearfix">
                            <span title="Organic" class="ion-leaf"></span>&nbsp;
                            <span title="Eco-Friendly" class="ion-waterdrop"></span>&nbsp;
                            <span title="Buy Online" class="ion-ios-cart"></span>&nbsp;
                            <span title="Vegan" class="ion-ios-paw"></span>&nbsp;
                            <span title="Fair-Trade" class="ion-android-globe"></span>&nbsp;
                            <a title="Favourites" class="ion-ios-star-outline g-icon-link g-pull-right"></a>
                        </div>
                    </div>
                </div>  
                <div class="g-card">
                    <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/project-2.jpg)"></a>
                    <div class="g-card-content">
                        <div class="g-clearfix g-card-header">
                            <a class="g-color-dark g-font-small g-card-title">Floral Print Cocktail Dress</a><br>
                            <a class="g-color-light g-font-smaller">Nancy's</a>
                        </div>
                        <div class="g-card-footer g-clearfix">
                            <span title="Buy Online" class="ion-ios-cart"></span>&nbsp;
                            <span title="Vegan" class="ion-ios-paw"></span>&nbsp;
                            <img style="height:13px; display: inline-block;" src="/wp-content/themes/mmc/img/canadian-leaf.png">
                            <a title="Favourites" class="ion-ios-star-outline g-icon-link g-pull-right"></a>
                        </div>
                    </div>
                </div> 
                <div class="g-card">
                    <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/project-3.jpg)"></a>
                    <div class="g-card-content">
                        <div class="g-clearfix g-card-header">
                            <a class="g-color-dark g-font-small g-card-title">Floral Print Cocktail Dress</a><br>
                            <a class="g-color-light g-font-smaller">Nancy's</a>
                        </div>
                        <div class="g-card-footer g-clearfix">
                            <span title="Buy Online" class="ion-ios-cart"></span>&nbsp;
                            <span title="Vegan" class="ion-ios-paw"></span>&nbsp;
                            <img class="g-icon-leaf" src="/wp-content/themes/mmc/img/canadian-leaf.png">
                            <a title="Favourites" class="ion-ios-star-outline g-icon-link g-pull-right"></a>
                        </div>
                    </div>
                </div> 
                <div class="g-card">
                    <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/project-4.jpg)"></a>
                    <div class="g-card-content">
                        <div class="g-clearfix g-card-header">
                            <a class="g-color-dark g-font-small g-card-title">Floral Print Cocktail Dress</a><br>
                            <a class="g-color-light g-font-smaller">Nancy's</a>
                        </div>
                        <div class="g-card-footer g-clearfix">
                            <span title="Organic" class="ion-leaf"></span>&nbsp;
                            <span title="Eco-Friendly" class="ion-waterdrop"></span>&nbsp;
                            <span title="Buy Online" class="ion-ios-cart"></span>&nbsp;
                            <span title="Vegan" class="ion-ios-paw"></span>&nbsp;
                            <span title="Fair-Trade" class="ion-android-globe"></span>&nbsp;
                            <a title="Favourites" class="ion-ios-star-outline g-icon-link g-pull-right"></a>
                        </div>
                    </div>
                </div> 
                <div class="g-card">
                    <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/project-5.jpg)"></a>
                    <div class="g-card-content">
                        <div class="g-clearfix g-card-header">
                            <a class="g-color-dark g-font-small g-card-title">Floral Print Cocktail Dress</a><br>
                            <a class="g-color-light g-font-smaller">Nancy's</a>
                        </div>
                        <div class="g-card-footer g-clearfix">
                            <span title="Organic" class="ion-leaf"></span>&nbsp;
                            <span title="Eco-Friendly" class="ion-waterdrop"></span>&nbsp;
                            <a title="Favourites" class="ion-ios-star-outline g-icon-link g-pull-right"></a>
                        </div>
                    </div>
                </div> 
                <div class="g-card">
                    <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/project-6.jpg)"></a>
                    <div class="g-card-content">
                        <div class="g-clearfix g-card-header">
                            <a class="g-color-dark g-font-small g-card-title">Floral Print Cocktail Dress</a><br>
                            <a class="g-color-light g-font-smaller">Nancy's</a>
                        </div>
                        <div class="g-card-footer g-clearfix">
                            <span title="Organic" class="ion-leaf"></span>&nbsp;
                            <span title="Fair-Trade" class="ion-android-globe"></span>&nbsp;
                            <a title="Favourites" class="ion-ios-star-outline g-icon-link g-pull-right"></a>
                        </div>
                    </div>
                </div> 
                <div class="g-card">
                    <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/project-1.jpg)"></a>
                    <div class="g-card-content">
                        <div class="g-clearfix g-card-header">
                            <a class="g-color-dark g-font-small g-card-title">Floral Print Cocktail Dress</a><br>
                            <a class="g-color-light g-font-smaller">Nancy's</a>
                        </div>
                        <div class="g-card-footer g-clearfix">
                            <span title="Vegan" class="ion-ios-paw"></span>&nbsp;
                            <span title="Fair-Trade" class="ion-android-globe"></span>&nbsp;
                            <a title="Favourites" class="ion-ios-star-outline g-icon-link g-pull-right"></a>
                        </div>
                    </div>
                </div> 
                <div class="g-card">
                    <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/project-2.jpg)"></a>
                    <div class="g-card-content">
                        <div class="g-clearfix g-card-header">
                            <a class="g-color-dark g-font-small g-card-title">Floral Print Cocktail Dress</a><br>
                            <a class="g-color-light g-font-smaller">Nancy's</a>
                        </div>
                        <div class="g-card-footer g-clearfix">
                            <span title="Organic" class="ion-leaf"></span>&nbsp;
                            <img class="g-icon-leaf" src="/wp-content/themes/mmc/img/canadian-leaf.png">
                            <a title="Favourites" class="ion-ios-star-outline g-icon-link g-pull-right"></a>
                        </div>
                    </div>
                </div> 
                <div class="g-card">
                    <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/project-3.jpg)"></a>
                    <div class="g-card-content">
                        <div class="g-clearfix g-card-header">
                            <a class="g-color-dark g-font-small g-card-title">Floral Print Cocktail Dress</a><br>
                            <a class="g-color-light g-font-smaller">Nancy's</a>
                        </div>
                        <div class="g-card-footer g-clearfix">
                            <span title="Eco-Friendly" class="ion-waterdrop"></span>&nbsp;
                            <span title="Buy Online" class="ion-ios-cart"></span>&nbsp;
                            <span title="Vegan" class="ion-ios-paw"></span>&nbsp;
                            <a title="Favourites" class="ion-ios-star-outline g-icon-link g-pull-right"></a>
                        </div>
                    </div>
                </div> 
                <div class="g-card">
                    <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/project-4.jpg)"></a>
                    <div class="g-card-content">
                        <div class="g-clearfix g-card-header">
                            <a class="g-color-dark g-font-small g-card-title">Floral Print Cocktail Dress</a><br>
                            <a class="g-color-light g-font-smaller">Nancy's</a>
                        </div>
                        <div class="g-card-footer g-clearfix">
                            <span title="Organic" class="ion-leaf"></span>&nbsp;
                            <span title="Vegan" class="ion-ios-paw"></span>&nbsp;
                            <img class="g-icon-leaf" src="/wp-content/themes/mmc/img/canadian-leaf.png">
                            <a title="Favourites" class="ion-ios-star-outline g-icon-link g-pull-right"></a>
                        </div>
                    </div>
                </div> 
            </div>

            <h2>Featured Companies</h2>
            <hr>

            <div class="row margin-bottom">
                <div class="col-1of4 sm-1of2">
                    <div class="g-card g-secondary">
                        <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/company-banner-1.jpg)"></a>
                        <div class="g-card-content">
                            <div class="g-clearfix g-card-header">
                                <a class="h3">The Herbivore Clothing Company</a>  
                                <p class="g-font-smallest">Innovative and clean design, creative fabrications, and beautiful colours are the cornerstones of the brand.</p>
                                <a class="g-btn-3 g-btn-xs"><span class="ion-link"></span>&nbsp;Visit Website</a>&nbsp;
                                <a class="g-btn-3 g-btn-xs"><span class="ion-ios-star-outline"></span>&nbsp;Save</a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="col-1of4 sm-1of2">
                    <div class="g-card g-secondary">
                        <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/company-banner-2.jpg)"></a>
                        <div class="g-card-content">
                            <div class="g-clearfix g-card-header">
                                <a rel="leanModal" href="#profile" class="h3">encircled</a>
                                <p class="g-font-smallest">Be More With Less.</p>
                                <a class="g-btn-3 g-btn-xs"><span class="ion-link"></span>&nbsp;Visit Website</a>&nbsp;
                                <a class="g-btn-3 g-btn-xs"><span class="ion-ios-star-outline"></span>&nbsp;Save</a>
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="col-1of4 sm-1of2">
                    <div class="g-card g-secondary">
                        <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/company-banner-3.jpg)"></a>
                        <div class="g-card-content">
                            <div class="g-clearfix g-card-header">
                                <a class="h3">Avia</a>
                                <p class="g-font-smallest">We manufacture a line of high-performance technical and functional activewear for men and women under the Avia brand.</p>
                                <a class="g-btn-3 g-btn-xs"><span class="ion-link"></span>&nbsp;Visit Website</a>&nbsp;
                                <a class="g-btn-3 g-btn-xs"><span class="ion-ios-star"></span>&nbsp;Saved</a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="col-1of4 sm-1of2">
                    <div class="g-card g-secondary">
                        <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/company-banner-4.jpg)"></a>
                        <div class="g-card-content">
                            <div class="g-clearfix g-card-header">
                                <a class="h3">Granted</a>
                            </div>
                            <p class="g-font-smallest">We work from our small studio on the southwest coast of British Columbia, Canada, surrounded by woolen sweaters and accessories that are hand-knit in our community.</p>
                            <a class="g-btn-3 g-btn-xs"><span class="ion-link"></span>&nbsp;Visit Website</a>&nbsp;
                            <a class="g-btn-3 g-btn-xs"><span class="ion-ios-star-outline"></span>&nbsp;Save</a>
                        </div>
                    </div>  
                </div>
            </div>

            <h2>Companies</h2>
            <hr>



            <div class="row margin-bottom">
                <div class="col-1of6 sm-1of4">
                    <div class="g-card g-secondary">
                        <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/company-banner-1.jpg)"></a>
                        <div class="g-card-content">
                            <div class="g-card-header">
                                <a class="h5">The Herbivore Clothing Company</a>
                            </div>
                            <div class="g-card-footer">
                                <a class="g-font-smallest g-icon-link"><span class="ion-link"></span>&nbsp;Visit Website</a>
                                <a class="g-font-smallest g-icon-link"><span class="ion-ios-star-outline"></span>&nbsp;Save</a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="col-1of6 sm-1of4">
                    <div class="g-card g-secondary">
                        <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/company-banner-2.jpg)"></a>
                        <div class="g-card-content">
                            <div class="g-card-header">
                                <a class="h5">The Canadian Denim Company</a>  
                            </div>
                            <div class="g-card-footer">
                                <a class="g-font-smallest g-icon-link"><span class="ion-link"></span>&nbsp;Visit Website</a>
                                <a class="g-font-smallest g-icon-link"><span class="ion-ios-star"></span>&nbsp;Saved</a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="col-1of6 sm-1of4">
                    <div class="g-card g-secondary">
                        <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/company-banner-3.jpg)"></a>
                        <div class="g-card-content">
                            <div class="g-card-header">
                                <a class="h5">Avia</a>  
                            </div>
                            <div class="g-card-footer">
                                <a class="g-font-smallest g-icon-link"><span class="ion-link"></span>&nbsp;Visit Website</a>
                                <a class="g-font-smallest g-icon-link"><span class="ion-ios-star-outline"></span>&nbsp;Save</a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="col-1of6 sm-1of4">
                    <div class="g-card g-secondary">
                        <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/company-banner-4.jpg)"></a>
                        <div class="g-card-content">
                            <div class="g-card-header">
                                <a class="h5">Wings + Horns</a>  
                            </div>
                            <div class="g-card-footer">
                                <a class="g-font-smallest g-icon-link"><span class="ion-link"></span>&nbsp;Visit Website</a>
                                <a class="g-font-smallest g-icon-link"><span class="ion-ios-star-outline"></span>&nbsp;Save</a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="col-1of6 sm-1of4">
                    <div class="g-card g-secondary">
                        <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/company-banner-5.jpg)"></a>
                        <div class="g-card-content">
                            <div class="g-card-header">
                                <a class="h5">encircled</a>  
                            </div>
                            <div class="g-card-footer">
                                <a class="g-font-smallest g-icon-link"><span class="ion-link"></span>&nbsp;Visit Website</a>
                                <a class="g-font-smallest g-icon-link"><span class="ion-ios-star-outline"></span>&nbsp;Save</a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="col-1of6 sm-1of4">
                    <div class="g-card g-secondary">
                        <a class="g-card-img" style="background-image: url(/wp-content/themes/mmc/img/company-banner-6.jpg)"></a>
                        <div class="g-card-content">
                            <div class="g-card-header">
                                <a class="h5">Muttenhead</a>  
                            </div>
                            <div class="g-card-footer">
                                <a class="g-font-smallest g-icon-link"><span class="ion-link"></span>&nbsp;Visit Website</a>
                                <a class="g-font-smallest g-icon-link"><span class="ion-ios-star-outline"></span>&nbsp;Save</a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>

            </section>

                
            <section id="grid">

                <h2>Grid System</h2>
                <hr>  

                <p>The grid system is created by any combination of 1-8 columns (ie "col-1of6") wrapped in a "row" class to clear floats.</p>
                <p>To change the size of columns based on screen size you may define the columns for medium screens, smaller screens and for mobile by adding "md-2of3", "sm-1of3", "xs-1of2" to columns respectively.</p>
                <p>To add margin bottom to columns you may add these classes to direct parent "rows": "margin-bottom" and "margin-bottom-sm"</p>
                <p>To change the width of the space between columns add "no-gutter", "sm-gutter", "lg-gutter", "sm-gutter-tablet", "sm-gutter-mobile" to parent "rows".</p>
                <p>You may also add "g-pull-right" to columns to float right instead of left.</p>
                <br><br>

                <div class="row margin-bottom">
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                </div>

                <div class="row margin-bottom-sm">
                    <div class="col-1of5">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of5">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of5">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of5">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of5">
                        <div class="row margin-bottom-sm">
                            <div class="col-1of2 sm-1of2">
                                <div class="testing-unit"></div>
                            </div>
                            <div class="col-1of2 sm-1of2">
                                <div class="testing-unit"></div>
                            </div>
                        </div>
                    </div>
                </div>

<pre><xmp><div class="row margin-bottom">
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
</div>

<div class="row margin-bottom-sm">
    <div class="col-1of5">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of5">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of5">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of5">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of5">
        <div class="row margin-bottom-sm">
            <div class="col-1of2 sm-1of2">
                <div class="testing-unit"></div>
            </div>
            <div class="col-1of2 sm-1of2">
                <div class="testing-unit"></div>
            </div>
        </div>
    </div>
</div></xmp></pre>

                <h3>Smaller Gutter</h3>
                <hr>

                <div class="row sm-gutter margin-bottom">
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                </div>

<pre><xmp><div class="row sm-gutter margin-bottom">
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
</div></xmp></pre>

                <h3>Smaller Gutter - Tablet</h3>
                <hr>

                <div class="row sm-gutter-tablet margin-bottom">
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                </div>

<pre><xmp><div class="row sm-gutter-tablet margin-bottom">
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
</div></xmp></pre>

                <h3>Smaller Gutter - Mobile</h3>
                <hr>

                <div class="row sm-gutter-mobile margin-bottom">
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of6 sm-1of3 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                </div>

<pre><xmp><div class="row sm-gutter-mobile margin-bottom">
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of6 sm-1of3 xs-1of2">
        <div class="testing-unit"></div>
    </div>
</div>
</xmp></pre>

                <h3>Larger Gutter</h3>
                <hr>

                <div class="row lg-gutter margin-bottom">
                    <div class="col-1of4 sm-1of2 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of4 sm-1of2 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of4 sm-1of2 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="col-1of4 sm-1of2 xs-1of2">
                        <div class="testing-unit"></div>
                    </div>
                </div>

<pre><xmp><div class="row lg-gutter margin-bottom">
    <div class="col-1of4 sm-1of2 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of4 sm-1of2 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of4 sm-1of2 xs-1of2">
        <div class="testing-unit"></div>
    </div>
    <div class="col-1of4 sm-1of2 xs-1of2">
        <div class="testing-unit"></div>
    </div>
</div></xmp></pre>

                <h3>No Gutter</h3>
                <hr>
                <div class="row no-gutter">
                    <div class="col-1of4 sm-1of2 xs-1of2">
                        <div style="background-color: black; height: 200px; width: 100%; display: block;">

                        </div>
                    </div>
                    <div class="col-1of4 sm-1of2 xs-1of2">
                        <div style="background-color: red; height: 200px; width: 100%; display: block;">

                        </div>
                    </div>
                    <div class="col-1of4 sm-1of2 xs-1of2">
                        <div style="background-color: black; height: 200px; width: 100%; display: block;">

                        </div>
                    </div>
                    <div class="col-1of4 sm-1of2 xs-1of2">
                        <div style="background-color: red; height: 200px; width: 100%; display: block;">

                        </div>
                    </div>
                </div>

<pre><xmp><div class="row no-gutter">
    <div class="col-1of4 sm-1of2 xs-1of2">
        <div style="background-color: black; height: 200px; width: 100%; display: block;">

        </div>
    </div>
    <div class="col-1of4 sm-1of2 xs-1of2">
        <div style="background-color: red; height: 200px; width: 100%; display: block;">

        </div>
    </div>
    <div class="col-1of4 sm-1of2 xs-1of2">
        <div style="background-color: black; height: 200px; width: 100%; display: block;">

        </div>
    </div>
    <div class="col-1of4 sm-1of2 xs-1of2">
        <div style="background-color: red; height: 200px; width: 100%; display: block;">

        </div>
    </div>
</div></xmp></pre>    

            </section>

            <section id="helper">       

                <h2>Helper Classes</h2>
                <hr>

                <table class="g-table g-table-striped">
                    <thead>
                        <tr>
                            <th>Class Name</th>
                            <th>Usage</th>
                            <th>Example</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>.h1, .h2, .h3, .h4, .h5, .h6</td>
                            <td>To apply heading styles</td>
                            <td><span class="h2">Heading 2</span></td>
                        </tr>
                        <tr>
                            <td>.g-text-uppercase</td>
                            <td>Uppercase Text</td>
                            <td><span class="g-text-uppercase">Uppercase Text</span></td>
                        </tr>
                        <tr>
                            <td>.g-text-underline</td>
                            <td>Underlined text</td>
                            <td class="g-text-underline">Underlined text</td>
                        </tr>
                        <tr>
                            <td>.g-font-bold</td>
                            <td>Bold Font</td>
                            <td><span class="g-font-bold">Circular 3M Bold</span></td>
                        </tr>
                        <tr>
                            <td>.g-font-italic</td>
                            <td>Italic Font</td>
                            <td><span class="g-font-italic">Circular 3M Italic</span></td>
                        </tr>
                        <tr>
                            <td>.g-bold-italic-bold</td>
                            <td>Bold Italic Font</td>
                            <td><span class="g-font-bold-italic">Circular 3M Bold Italic</span></td>
                        </tr>
                        <tr>
                            <td>.g-text-right</td>
                            <td>Right aligned text</td>
                            <td class="g-text-right">Right aligned text</td>
                        </tr>
                        <tr>
                            <td>.g-text-left</td>
                            <td>Left aligned text</td>
                            <td class="g-text-left">Left aligned text</td>
                        </tr>
                        <tr>
                            <td>.g-text-center</td>
                            <td>Center aligned text</td>
                            <td class="g-text-center">Center aligned text</td>
                        </tr>
                        <tr>
                            <td>.g-pull-right</td>
                            <td>Float right</td>
                            <td><span class="g-pull-right">Float right</span></td>
                        </tr>
                        <tr>
                            <td>.g-pull-left</td>
                            <td>Float left</td>
                            <td><span class="g-pull-left">Float left</span></td>
                        </tr>
                        <tr>
                            <td>.g-clearfix</td>
                            <td>To clear floats surround floated elements in .g-clearfix</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.g-margin-bottom, .g-margin-bottom-sm</td>
                            <td>To add margin bottom</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.g-margin-top, .g-margin-top-sm</td>
                            <td>To add margin top</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.g-padding-bottom, .g-padding-bottom-sm</td>
                            <td>To add padding bottom</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.g-padding-top, .g-padding-top-sm</td>
                            <td>To add padding top</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.g-round</td>
                            <td>To add 50% border radius</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.g-hidden</td>
                            <td>Hides elements on all screens</td>
                            <td><span class="g-hidden">Hidden element</span></td>
                        </tr>
                        <tr>
                            <td>.g-xs-hidden</td>
                            <td>Hides elements in mobile view</td>
                            <td><span class="g-xs-hidden">Mobile hidden element</span></td>
                        </tr>
                        <tr>
                            <td>.g-sm-hidden</td>
                            <td>Hides elements in tablet view</td>
                            <td><span class="g-sm-hidden">Tablet hidden element</span></td>
                        </tr>
                        <tr>
                            <td>.g-lg-hidden</td>
                            <td>Hides elements in desktop view</td>
                            <td><span class="g-lg-hidden">Desktop hidden element</span></td>
                        </tr>
                        <tr>
                            <td>.g-container</td>
                            <td>To wrap page content. (max width of 820px)</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.g-container-lg</td>
                            <td>To wrap page content - wider content. (max width of 1150px)</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.g-section</td>
                            <td>To wrap page content section to add top and bottom padding.</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.g-secondary</td>
                            <td>Apply to hr tags for secondary hr styling.</td>
                            <td><hr class="g-secondary"></td>
                        </tr>                   
                    </tbody>
                </table>

            </section>

        </div>



    <div id="profile" class="g-modal-profile lean_modal lg">
        <div class="g-modal-banner" style="background-image: url(/wp-content/themes/mmc/img/banner-3.jpg)"></div>
        <a title="close" class="ion-close modal_close"></a>
        <div class="modal-inner">
            <div class="row margin-bottom">
                <div class="col-2of7">
                    <div class="g-modal-sidebar">
                        <div class="g-logo">
                            <img src="/wp-content/themes/mmc/img/company-logo-3.png">
                        </div>
                        <div class="g-text-center">
                            <a class="g-icon-link"><span class="ion-link"></span>&nbsp;Visit Website</a>
                            <a class="g-icon-link"><span class="ion-ios-star-outline"></span>&nbsp;Save</a>
                        </div>
                        <p class="g-font-small">
                            <strong>Categories: </strong><a>Womans</a>, <a>Organic</a>, <a>Casual</a>
                        </p>
                        <div class="g-side-nav">
                            <a class="g-active">About<span class="ion-android-arrow-forward"></span></a>
                            <a>Retail Locations<span class="ion-android-arrow-forward"></span></a>
                            <a>Contact<span class="ion-android-arrow-forward"></span></a>
                            <a>Products<span class="ion-android-arrow-forward"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-5of7">
                    <div class="g-modal-body">
                        <div class="g-icons">
                            <span title="Organic" class="ion-leaf">&nbsp;Organic</span>
                            <span title="Eco-Friendly" class="ion-waterdrop">&nbsp;Eco-Friendly</span>
                            <span title="Buy Online" class="ion-ios-cart">&nbsp;Buy Online</span>
                            <span title="Vegan" class="ion-ios-paw">&nbsp;Vegan</span>
                            <span title="Fair-Trade" class="ion-android-globe">&nbsp;Fair-Trade</span>
                        </div>
                        <p>Fashion that helps the planet, the people who make our clothes and customers like you live better lives. Encircled creates clothing that versatile in design, and everlasting in style. We beautifully mesh function with style. (Think of us as the opposite to zip off pants). We believe that stylish travel clothing is possible. And that in life, compromise is optional.</p>
                        <br>
                        <a class="g-btn-4">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="product" class="g-modal-product lean_modal md">
        <a title="close" class="ion-close modal_close"></a>
        <div class="row">
            <div class="col-3of7 g-text-center">
                <img class="g-margin-top g-margin-bottom" src="/wp-content/themes/mmc/img/project-1.jpg">
            </div>
            <div class="col-4of7">
                <h2>Little Black Dress</h2>
                <h3>encircled</h3>
                <div class="g-color-light g-font-large">$59.99</div>
                <div class="g-icons g-sm">
                    <span title="Organic" class="ion-leaf">&nbsp;Organic</span>
                    <span title="Eco-Friendly" class="ion-waterdrop">&nbsp;Eco-Friendly</span>
                </div>
                <p class="g-font-small">The Chrysalis Cardi is every woman's wardrobe staple. The versatile Cardi can be styled 8+ ways. From a cozy cocoon cardi, to a chic grecian tunic, a glamorous one-shoulder gown, to a poncho and a classic infinity scarf.</p>
                <p class="g-font-smaller">
                    <strong>Materials:</strong> 95% Polyester / 5% Elastane<br>
                    <strong>Colours Avaiable:</strong> Black, Red, Peach<br>
                    <strong>Sizes:</strong> XS, SM, MED<br>
                </p>
                <br>
                <div class="g-clearfix">
                    <a class="g-btn g-btn-sm">View Online</a>
                    <a class="g-btn-3 g-btn-sm"><span class="ion-ios-star-outline"></span>&nbsp;Save</a>
                    <a class="g-pull-right g-link-3 g-font-small">See more products by encircled&nbsp;<span class="ion-android-arrow-forward"></span></a>
                </div>
            </div>
        </div>
    </div>


    </div>

    </main>

<?php get_footer(); ?>
