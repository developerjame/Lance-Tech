   <x-layout>
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

           <x-card>
            <div class="flex container-fluid full-height d-flex justify-content-center align-items-center">
                
                <div class="text-center">
                    <h3 class="text-2xl text-white font-bold">
                        <p>Writing Accounts</p>
                    </h3>
                    <div class="text-sm text-white mb-4">{{$count6}} accounts</div>
                    <div class="text-xl text-white mb-4 hover:text-black"><a href="/admin/writingaccount">Click here <i class="bi bi-hand-index-thumb"></i></a></div>
                    
                </div>
            </div>
           </x-card>

           <x-card>
            <div class="flex container-fluid full-height d-flex justify-content-center align-items-center">
                
                <div class="text-center">
                    <h3 class="text-2xl text-white font-bold">
                        <p>AI Models</p>
                    </h3>
                    <div class="text-sm text-white mb-4">{{$count4}} AI models</div>
                    <div class="text-xl text-white mb-4 hover:text-black"><a href="/admin/aimodel">Click here <i class="bi bi-hand-index-thumb"></i></a></div>
                    
                </div>
            </div>
           </x-card>
           <x-card>
            <div class="flex container-fluid full-height d-flex justify-content-center align-items-center">
                
                <div class="text-center">
                    <h3 class="text-2xl text-white font-bold">
                        <p>Chat Moderations</p>
                    </h3>
                    <div class="text-sm text-white mb-4">{{$count5}}chat moderations</div>
                    <div class="text-xl text-white mb-4 hover:text-black"><a href="/admin/moderation">Click here <i class="bi bi-hand-index-thumb"></i></a></div>
                    
                </div>
            </div>
           </x-card>
           <x-card>
            <div class="flex container-fluid full-height d-flex justify-content-center align-items-center">
                
                <div class="text-center">
                    <h3 class="text-2xl text-white font-bold">
                        <p>Training Programs</p>
                    </h3>
                    <div class="text-sm text-white mb-4">{{$count3}} training programa</div>
                    <div class="text-xl text-white mb-4 hover:text-black"><a href="/admin/account">Click here <i class="bi bi-hand-index-thumb"></i></a></div>
                    
                </div>
            </div>
           </x-card>

           <!--
           <x-card>
            <div class="flex container-fluid full-height d-flex justify-content-center align-items-center">
                
                <div class="text-center">
                    
                    <h3 class="text-2xl text-white font-bold">
                        <p>Messages</p>
                    </h3>
                    <div class="text-sm text-white mb-4">{{$count1}} messages</div>
                    <div class="text-xl text-white mb-4"><a href="/admin/message">Click here <i class="bi bi-hand-index-thumb"></i></a></div>
                    
                </div>
            </div>
           </x-card>-->
    
    </div>
    <div class="mt-6 p-4">
        
    </div>
    </x-layout>