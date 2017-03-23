# Customized Plugins for idea collections
module JekyllPlugins
	class IdeaCategoryPage < Jekyll::Page
		def initialize(site, base, dir)
			@site = site
			@base = base
			@dir = dir
			print "This is for testing to be seen on command prompt"

		end
	end
	class IdeaCategoryPageGenerator < Jekyll::Generator
		safe true
		def generate(site)
			
		end
	end

	class IdeaCategories

		def initialize(site)
			site.config['ideacategories'] = generateCategories(site)
		#	@site.idea_categories = generateCategories
		end

		def generateCategories(site)
			categoriesList = {}
			site.collections['ideas'].docs.each do |idea|
				
				idea['categories'].each do |cat|
					unless categoriesList.key? cat
						categoriesList[cat] = []
					end 
					categoriesList[cat].push(idea)
				end
				
			end
			categoriesList
		end
	end

end

Jekyll::Hooks.register :site, :post_read do |jekyll| # jekyll here acts as site global object

	JekyllPlugins::IdeaCategories.new(jekyll)

	print jekyll.config['ideacategories']
end