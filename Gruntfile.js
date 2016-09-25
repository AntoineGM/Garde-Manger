module.exports = function(grunt) {

  	// Project configuration.
  	grunt.initConfig({
    	pkg: grunt.file.readJSON('package.json'),
	    watch: {
			project: {
				files: ['static/js/app/**/*.js','static/css/**/*.css','static/css/**/**/*.css','static/images/**', 'static/images/**/**', '*.php', '*/*.php', '*/*/*.php' ],
				options : {
					livereload : true,
					spawn: false
				}
			}
		},
	   	compass: {
		    dev: {
	        	options: {              
		          	environment: 'development'    
				}
		    },
	      	prod: {
	        	options: {              
	          		environment: 'production'     
			  	}
	      	},
	    },
	    uglify: {
			all: {
				files: {
		        	'static/js/app/plugins.js': [
		        		'static/js/plugins/jquery.fitvids/jquery.fitvids.js',
		        		'static/js/plugins/jquery.easing/jquery.easing.1.3.js',
		        		'static/js/plugins/slick/slick.min.js',
		        	],
		        	'static/min/js/app/plugins.js': [
		        		'static/js/plugins/jquery.fitvids/jquery.fitvids.js',
		        		'static/js/plugins/jquery.easing/jquery.easing.1.3.js',
		        		'static/js/plugins/slick/slick.min.js',
		        	],
		        	'static/min/js/app/global.js': [
		        		'static/js/app/global.js',
		        	],
		    	}
			},
		},
		svgmin: {
			dist: {
				files: [{
					expand: true,
					cwd: 'static/images/svg/original',
					src: ['*.svg'],
					dest: 'static/images/svg/min'
				}]
			}
		},
		grunticon: {
			foo: {
				files: [{
					expand: true,
					cwd: 'static/images/svg/min',
					src: ['*.svg', '*.png'],
					dest: "static/images/svg"
				}],
				options: {

					// CSS filenames
					datasvgcss: "src/icons.data.svg.css",
					datapngcss: "src/icons.data.png.css",
					urlpngcss: "src/icons.fallback.css",

					// preview HTML filename
					previewhtml: "preview.html",

					// grunticon loader code snippet filename
					loadersnippet: "src/grunticon.loader.js",

					// folder name (within dest) for png output
					pngfolder: "png",

					pngpath: "../png",

					// prefix for CSS classnames
					cssprefix: ".icon-",

					defaultWidth: "300px",
					defaultHeight: "200px",

					// define vars that can be used in filenames if desirable, like foo.colors-primary-secondary.svg
					colors: {
						primary: "red",
						secondary: "#666"
					},

					// css file path prefix - this defaults to "/" and will be placed before the "dest" path when stylesheets are loaded.
					// This allows root-relative referencing of the CSS. If you don't want a prefix path, set to to ""
					cssbasepath: "",

					enhanceSVG: true
					
				}
			}
		}
	});

  	// Load the plugin
  	grunt.loadNpmTasks( 'grunt-contrib-watch' );
  	grunt.loadNpmTasks( 'grunt-contrib-compass' );
  	grunt.loadNpmTasks( 'grunt-contrib-uglify' );
  	grunt.loadNpmTasks( 'grunt-grunticon' );
	grunt.loadNpmTasks( 'grunt-svgmin' );
	

  	// Default task(s).
  	// grunt.registerTask('default', ['compass:dev' , 'watch']);
  	grunt.registerTask('default', ['watch']);
  	
  	// prod build
  	grunt.registerTask('local', ['uglify']);
  	grunt.registerTask('prod', ['uglify']);
  	grunt.registerTask('dev', ['uglify']);
  	
  	// grunticon build
  	grunt.registerTask('svgmake', ['svgmin', 'grunticon:foo']);

};