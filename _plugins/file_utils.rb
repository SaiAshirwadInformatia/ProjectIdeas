module JekyllPlugins
	module FileUtils
		def created_at(input)
			File.ctime(input)
		end

		def lastmodified_at(input)
			File.mtime(input)
		end
	end
end

Liquid::Template.register_filter(JekyllPlugins::FileUtils)