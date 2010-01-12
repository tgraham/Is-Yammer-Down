http = Net::HTTP.new('www.webbynode.com', 443)
req = Net::HTTP::Get.new('/login')
http.use_ssl = true
response = http.request(req)

get '/' do
  if response.code.to_i == 200
    haml :go
  else
    haml :awry
  end
end