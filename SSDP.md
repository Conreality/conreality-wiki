https://en.wikipedia.org/wiki/Simple_Service_Discovery_Protocol

### Elixir

https://github.com/nerves-project/nerves_ssdp_client

    $ git clone https://github.com/nerves-project/nerves_ssdp_client.git
    $ cd nerves_ssdp_client
    $ mix deps.get

    $ iex -S mix
    iex(1)> nodes = Nerves.SSDPClient.discover
    %{"uuid:3450b00e-285e-4b0b-ae1d-a66f90535494" => %{host: "192.168.33.238",
        st: "urn:nerves-project-org:service:cell:1"}, ...}

### Ruby

https://github.com/daumiller/ssdp

    $ sudo gem install ssdp

    $ irb -rssdp
    >> finder = SSDP::Consumer.new timeout: 3, first_only: true
    >> result = finder.search service: 'urn:nerves-project-org:service:cell:1'
    => {:address=>"192.168.33.238", :port=>39854, :status=>"HTTP/1.1 200 OK",
        :params=>{"ST"=>"urn:nerves-project-org:service:cell:1",
                  "USN"=>"uuid:3450b00e-285e-4b0b-ae1d-a66f90535494"},
        :body=>nil}
