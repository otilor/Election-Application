<template>
	<div class="container">
        <div class="row justify-content-center">
		     <div class="mx-auto my-5 col-md-6">
				<div class="flex-grow story-ended p-5 br-20px m-1 col-md-12 bg-mpblue" v-for = "poll in polls" v-bind:key = "poll.id">
					<h2 class="text-headline text-white">{{ poll.title }}</h2>
					<h4 class="text-body text-mpblue-500">{{ poll.description }}</h4>
					<div class="end-of-story-button mt-20px">
						<a :href="poll.poll_link" class="py-3 br-10px px-4 bg-msblue-600  text-caps">Elect!</a>
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
