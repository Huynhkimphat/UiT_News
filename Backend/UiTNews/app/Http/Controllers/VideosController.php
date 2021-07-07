<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Http\Resources\VideosResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Pagination\Paginator;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return view('index')->with('videos',$videos);

        // return view('layouts.app');
        // return view('layouts.footer');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function latestVideos()
    {
        $latestVideos = Video::latest()->take(3)->get();
        $latestVideosMore = Video::latest()->skip(3)->take(2)->get();
        return view('show', compact('latestVideos','latestVideosMore'));
    }

    public function manageVideos()
    {
        $videos = Video::all();
        // return $videos;
        return view('manageVideos')->with('videos',$videos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAllVideos()
    {
        $video = [
            [
                // 'id' => 1,
                'VIDEO_TITLE' => 'Cách làm "Trà Sữa" đơn giản nhất, ai cũng làm được',
                'VIDEO_FILE' => 'https://youtu.be/nZ4fGyS6jiM',
                'VIDEO_DESCRIPTION' => 'Cách làm "Trà Sữa" đơn giản nhất, ai cũng làm được | How to make Milk Tea | Lilo Kitchen

                Hôm nay mình sẽ quay lại với món Trà Sữa huyền thoại nhé, đảm bảo xem xong ai cũng có thể làm được, công thức làm siêu siêu dễ, mình chắc chắn sẽ không làm bạn thất vọng đâu. Hãy cùng theo dõi nhé.',
                'VIDEO_AUTHOR' => 'Lilo Kitchen',
                'VIDEO_ORIGIN' => 'Youtube',
                'VIDEO_TYPE'=>'Ẩm thực',
                'VIDEO_VIEW'=>10,

            ],
            [
                // 'id' => 2,
                'VIDEO_TITLE' => 'Malibu - Miley Cyrus (Boyce Avenue ft. Emily Zeck acoustic cover)',
                'VIDEO_FILE' => 'https://www.youtube.com/embed/ooNLHlCpVb8',
                'VIDEO_DESCRIPTION' => 'Audio & Video Produced by Boyce Avenue
                Engineered, Mixed & Mastered by Adam Barber
                Directed by Adam Barber & Alejandro Manzano
                Filmed by Adam Barber & Fabian Manzano
                Edited & Colored by Adam Barber
                Video Assistant: Jesse Scott
                Filmed at 3 Peace Studios in Sarasota, Florida',
                'VIDEO_AUTHOR' => 'Boyce Avenue|Emily Zeck',
                'VIDEO_ORIGIN' => 'Youtube',
                'VIDEO_TYPE'=>'Âm nhạc',
                'VIDEO_VIEW'=>11,

            ],
            [
                // 'id' => '3',
                'VIDEO_TITLE' => 'Luyện đọc Tiếng Anh-Improve your pronunciation in English-Part 3',
                'VIDEO_FILE' => 'https://www.youtube.com/embed/h61rQlJySMo',
                'VIDEO_DESCRIPTION' => 'Luyện đọc Tiếng Anh - Improve your pronunciation in English 🤓

                This video will help you practice pronunciation and to become more familiar with the sounds of English that you may not be accustomed to.

                Repeatedly listen to the pronunciation of native speakers, and it will really improve your listening level!',
                'VIDEO_AUTHOR' => "I'm Mary",
                'VIDEO_ORIGIN' => 'Youtube',
                'VIDEO_TYPE'=>'Học thuật',
                'VIDEO_VIEW'=>12,

            ],
            [
                // 'id' => '4',
                'VIDEO_TITLE' => 'Bỏ Em Vào Balo - Tân Trần | Official Audio',
                'VIDEO_FILE' => 'https://www.youtube.com/embed/FW5aNm9cx9A',
                'VIDEO_DESCRIPTION' => 'Bỏ em vào balo
                Đưa em ra khỏi thủ đô
                Mình cùng rời thành phố
                Tránh những làn khói ô tô
                Xây 1 căn nhà gỗ
                Ở mãi xa tận ngoại ô
                Vứt hết những bão tố
                Giữa chốn Hà Nội đông đúc Xô bồ
                ',
                'VIDEO_AUTHOR' => 'Tân Trần',
                'VIDEO_ORIGIN' => 'Youtube',
                'VIDEO_TYPE'=>'Âm nhạc',
                'VIDEO_VIEW'=>8,

            ],
            [
                // 'id' => '5',
                'VIDEO_TITLE' => 'TIN BÓNG ĐÁ 7/7: ITALIA VÀO CHUNG KẾT , RAMOS SẮP ĐẾN PSG, BARCA DỰ ĐỊNH TỐNG KHỨ GRIEZMANN',
                'VIDEO_FILE' => 'https://www.youtube.com/embed/ye9YFJsJkSY',
                'VIDEO_DESCRIPTION' => 'Chào mừng đến với bản tin sáng mỗi ngày của BLV Anh Quân. Euro 2020 đã quay trở lại với lượt trận bán kết, và hãy cùng tôi điểm lại những diễn biến nóng hổi nhất để biết được Ý hay Tây Ban Nha là đội bóng giành được tấm vé vào trận chung kết. Cùng với đó là mọi chuyển động nóng nhất trên thị trường chuyển nhượng. Nào, chúng ta cùng bắt đầu.

                BLV Anh Quân và Web Thể Thao 247 hợp tác để mang đến highlights và phân tích thú vị tại EURO 2020.',
                'VIDEO_AUTHOR' => 'BLV Anh Quân',
                'VIDEO_ORIGIN' => 'Youtube',
                'VIDEO_TYPE'=>'Thể thao',
                'VIDEO_VIEW'=>15,

            ],
            [
                // 'id' => '6',
                'VIDEO_TITLE' => 'Indonesia - Việt Nam | Ngày Càng Out Trình ĐNÁ, ĐTVN Đã Sẵn Sàng Chinh Phục Toàn Cõi Châu Lục!',
                'VIDEO_FILE' => 'https://www.youtube.com/embed/oFa7UROnTrA',
                'VIDEO_DESCRIPTION' => 'Cùng Bóng Đá Số HD thưởng thức những diễn biến hấp dẫn nhất của trận lượt đi giữa ĐT Việt Nam và ĐT Indonesia trên SVĐ Bung Karno, trận đấu chứng kiến hàng công của chúng ta thi đấu thăng hoa để giành chiến thắng trước đối thủ với tỷ số 3-1 chung cuộc!',
                'VIDEO_AUTHOR' => 'Bóng Đá Số HD',
                'VIDEO_ORIGIN' => 'Youtube',
                'VIDEO_TYPE'=>'Thể thao',
                'VIDEO_VIEW'=>16,

            ],
            [
                // 'id' => '7',
                'VIDEO_TITLE' => 'ĐÀ LẠT: Những vấn đề địa lý',
                'VIDEO_FILE' => 'https://www.youtube.com/embed/P5a5L-2IEDU',
                'VIDEO_DESCRIPTION' => 'Chân thành cảm ơn
                Nhà văn Nguyễn Vĩnh Nguyên
                Trung tâm Xúc tiến Đầu tư Thương Mại và Du lịch Lâm Đồng
                Flycam Team: Đào Hữu Độ & Virtual World Vietnam https://www.youtube.com/user/huudodao
                Dự án nghệ thuât Phố Bên Đồi https://www.youtube.com/channel/UCtbt...
                Thank you!',
                'VIDEO_AUTHOR' => 'Dương Địa Lý',
                'VIDEO_ORIGIN' => 'Youtube',
                'VIDEO_TYPE'=>'Du lịch',
                'VIDEO_VIEW'=>15,

            ],
            [
                // 'id' => '8',
                'VIDEO_TITLE' => '10 mẹo làm đẹp giúp mình tự tin hơn - chăm sóc răng, tóc, mùi cơ thể v.v',
                'VIDEO_FILE' => 'https://www.youtube.com/embed/UC6zpr5Cjeg',
                'VIDEO_DESCRIPTION' => 'NHỮNG SẢN PHẨM MÌNH GIỚI THIỆU TRONG VIDEO:

                Nước hoa De Memoria:
                Link Shopee Mall: https://shorten.asia/e1hHTGzJ
                Link mua hàng nhanh của hãng: https://www.de-memoria.vn/big-sale
                Link fanpage cho bạn nào cần thêm thông tin: https://m.facebook.com/dememoriavietnam/

                Dầu gội & Dầu xả Some By Mi Cica Peptide Anti Hair Loss Derma Scalp: https://shorten.asia/JJZJBvDm

                XỊT DƯỠNG TÓC SOME BY MI CICA PEPTIDE ANTI HAIR LOSS DERMA SCALP TONIC 150ML: https://shorten.asia/qJfq3u5D ',
                'VIDEO_AUTHOR' => 'Meichan',
                'VIDEO_ORIGIN' => 'Youtube',
                'VIDEO_TYPE'=>'Làm đẹp',
                'VIDEO_VIEW'=>15,

            ],
            [
                // 'id' => '9',
                'VIDEO_TITLE' => 'K01 Thuật toán Quick Sort Phần 01',
                'VIDEO_FILE' => 'https://www.youtube.com/embed/_tKBrMOTDpE',
                'VIDEO_DESCRIPTION' => 'K01 Thuật toán Quick Sort Phần 01. K01 Thuật toán Quick Sort Phần 01. K01 Thuật toán Quick Sort Phần 01. K01 Thuật toán Quick Sort Phần 01',
                'VIDEO_AUTHOR' => 'Nguyễn Tấn Trần Minh Khang',
                'VIDEO_ORIGIN' => 'Youtube',
                'VIDEO_TYPE'=>'Học thuật',
                'VIDEO_VIEW'=>17,

            ],
            [
                // 'id' => '10',
                'VIDEO_TITLE' => 'Cập nhật kỳ thi tốt nghiệp THPT Quốc gia 2021: Gần 1 triệu thí sinh bắt đầu môn thi đầu tiên',
                'VIDEO_FILE' => 'https://www.youtube.com/embed/gPm8NGBn8-s',
                'VIDEO_DESCRIPTION' => 'Theo tin Cập nhật kỳ thi tốt nghiệp THPT Quốc gia 2021, sáng nay 7/7, Gần 1 triệu thí sinh bắt đầu môn thi đầu tiên. Đã có 3 vòng bảo vệ được thiết lập để đảm bảo giãn cách, an toàn cho các thí sinh.',
                'VIDEO_AUTHOR' => 'Vietnamnet Official',
                'VIDEO_ORIGIN' => 'Youtube',
                'VIDEO_TYPE'=>'Tin tức',
                'VIDEO_VIEW'=>19,

            ],
            [
                // 'id' => '11',
                'VIDEO_TITLE' => 'Đề thi môn Văn THPT Quốc gia 2021: Hay, vừa sức thí sinh',
                'VIDEO_FILE' => 'https://www.youtube.com/embed/r8IlYp0Jqsc',
                'VIDEO_DESCRIPTION' => 'Đề thi môn Văn THPT Quốc gia 2021 năm nay được các thí sinh đánh giá khá vừa sức, hay.

                (*) Theo dõi thêm tại www.vtcnow.net',
                'VIDEO_AUTHOR' => 'NOW TIN MỚI',
                'VIDEO_ORIGIN' => 'Youtube',
                'VIDEO_TYPE'=>'Tin tức',
                'VIDEO_VIEW'=>7,

            ],
        ];
                Video::insert($video);
                return redirect('videos');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = new Video();

        $query = DB::table('videos')->insert([
            'VIDEO_TITLE' => $request->input('VIDEO_TITLE'),
            'VIDEO_FILE' => $request->input('VIDEO_FILE'),
            'VIDEO_DESCRIPTION' => $request->input('VIDEO_DESCRIPTION'),
            'VIDEO_AUTHOR' => $request->input('VIDEO_AUTHOR'),
            'VIDEO_ORIGIN' => $request->input('VIDEO_ORIGIN'),
            'VIDEO_TYPE' => $request->input('VIDEO_TYPE'),
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at,
        ]);

        if($query){
            return back()->with('success', 'Video have been successfully created');
        }else{
            return back()->with('fail', 'Something went wrong');
        }

        $video->save();
        return redirect('videos/manageVideos');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video = Video::find($id);
        $video->VIDEO_VIEW += 1;
        $video->save();
        $topView = Video::orderByDesc('VIDEO_VIEW')->whereNotIn('id',[$video->id])->get();
        return view("showVideos", compact('video','topView'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $video = Video::findOrFail($id);

        return view('edit',compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);

        $video->VIDEO_TITLE = $request->input('VIDEO_TITLE');
        $video->VIDEO_FILE = $request->input('VIDEO_FILE');
        $video->VIDEO_DESCRIPTION = $request->input('VIDEO_DESCRIPTION');
        $video->VIDEO_AUTHOR = $request->input('VIDEO_AUTHOR');
        $video->VIDEO_ORIGIN = $request->input('VIDEO_ORIGIN');
        $video->VIDEO_TYPE = $request->input('VIDEO_TYPE');
        $video->updated_at = $request->updated_at;
        $video->save();

        return redirect('videos/manageVideos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $videos=Video::findOrFail($id);

        $videos->delete();
        return redirect('/videos/manageVideos');

    }

}
