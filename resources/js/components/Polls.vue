<template>
	<div class="container">
        <div class="row justify-content-center">
		     <div class="mx-auto my-5 col-md-6">
				<div class="flex-grow story-ended p-5 br-20px m-1 col-md-12 bg-mpblue">
					<h2 class="text-headline text-white">Enough of the story right?</h2>
					<h4 class="text-body text-mpblue-500">Let's jump right into it</h4>
					<div class="end-of-story-button mt-20px">
						<a href="/polls" class="py-3 br-10px px-4 bg-msblue-600  text-caps">start off</a>
					</div>
				</div>
			</div>

			
            <div class="col-md-8">
            	<h3 class="text-center">New polls</h3>

                <div class="card" v-for="poll in polls" v-bind:key="poll.id">
                    <div class="card-header text-black text-center">{{ poll.title }}</div>

                    <div class="card-body">
                        <strong><p class="alert alert-info">{{ poll.description }}</p></strong>
                        <a class="btn btn-success" :href="poll.poll_link">Continue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script type="text/javascript">
	export default {
		data() {
			return {
				polls: [],
				poll: {
					id: '',
					title: '',
					description: '',
                    poll_link:'',
					session: '',
					position: ''

				},
				poll_id: '',
				pagination: {},
				edit: false
			}
		},

		created() {
			try {
				this.fetchArticles();	
			} catch (error) {
				console.log(error);
			}
			
		},

		methods: {
			fetchArticles: function() {
				
				fetch('api/polls').then(res => res.json()).then(res => {
					this.polls = res.data;
				
				});
				
				
			},

		}
	}
</script>
