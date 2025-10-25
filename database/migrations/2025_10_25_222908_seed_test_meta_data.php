<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $metaData = [
            // ============= ACADEMIC TESTS =============
            
            // Test 1 (ID: 14)
            [
                'id' => 14,
                'listening_meta_title' => 'Junior Cycle Camp Cambridge 16 Listening Test 3',
                'listening_meta_description' => 'Solve IELTS listening test on junior cycle camp and check your band score with answers.',
                'listening_focus_keywords' => 'junior cycle camp listening test',
                'reading_meta_title' => 'Why Pagodas Fall Down Cambridge 7 Reading Test 1',
                'reading_meta_description' => 'Solve IELTS reading test on why pagodas fall down and check your band scores with answers.',
                'reading_focus_keywords' => 'pagodas fall down reading test',
            ],
            
            // Test 2 (ID: 15)
            [
                'id' => 15,
                'listening_meta_title' => 'Children Engineering Workshop Cambridge 16 Listening Test 1',
                'listening_meta_description' => 'Solve IELTS listening test on children engineering workshop and check your band score with answers.',
                'listening_focus_keywords' => 'children engineering workshop listening test',
                'reading_meta_title' => 'Sheet Glass Manufacture Cambridge 8 Reading Test 2',
                'reading_meta_description' => 'Solve IELTS reading test on sheet glass manufacture and check your band scores with answers.',
                'reading_focus_keywords' => 'sheet glass manufacture reading test',
            ],
            
            // Test 3 (ID: 67)
            [
                'id' => 67,
                'listening_meta_title' => 'Bankside Recruitment Agency Cambridge 15 Listening Test 1',
                'listening_meta_description' => 'Solve IELTS listening test on bankside recruitment agency and check your band score with answers.',
                'listening_focus_keywords' => 'bankside recruitment agency listening test',
                'reading_meta_title' => 'Nutmeg a valuable spice Cambridge 15 Reading Test 1',
                'reading_meta_description' => 'Solve IELTS reading test on nutmeg a valuable spice and check your band scores with answers.',
                'reading_focus_keywords' => 'nutmeg a valuable spice reading test',
            ],
            
            // Test 4 (ID: 69)
            [
                'id' => 69,
                'listening_meta_title' => 'Festival Information Cambridge 15 Listening Test 2',
                'listening_meta_description' => 'Solve IELTS listening test on festival information and check your band score with answers.',
                'listening_focus_keywords' => 'festival information listening test',
                'reading_meta_title' => 'Urban Engineers Learn From Dance Cambridge 15 Reading Test 2',
                'reading_meta_description' => 'Solve IELTS reading test on urban engineers learn from dance and check your band scores with answers.',
                'reading_focus_keywords' => 'urban engineers learn from dance reading test',
            ],
            
            // Test 5 (ID: 73)
            [
                'id' => 73,
                'listening_meta_title' => 'South City Cycling Club Cambridge 13 Listening Test 2',
                'listening_meta_description' => 'Solve IELTS listening test on south city cycling club and check your band score with answers.',
                'listening_focus_keywords' => 'south city cycling club listening test',
                'reading_meta_title' => 'Cutty Sark Fastest Sailing Ship Cambridge 13 Reading Test 4',
                'reading_meta_description' => 'Solve IELTS reading test on cutty sark fastest sailing ship and check your band scores with answers.',
                'reading_focus_keywords' => 'cutty sark fastest sailing ship reading test',
            ],
            
            // Test 6 (ID: 74)
            [
                'id' => 74,
                'listening_meta_title' => 'Holiday Rental Cambridge 16 Listening Test 4',
                'listening_meta_description' => 'Solve IELTS listening test on holiday rental and check your band score with answers.',
                'listening_focus_keywords' => 'holiday rental listening test',
                'reading_meta_title' => 'Roman Tunnels Cambridge 16 Reading Test 4',
                'reading_meta_description' => 'Solve IELTS reading test on roman tunnels and check your band scores with answers.',
                'reading_focus_keywords' => 'roman tunnels reading test',
            ],
            
            // Test 7 (ID: 76)
            [
                'id' => 76,
                'listening_meta_title' => 'Homestay Application Cambridge 7 Listening Test 4',
                'listening_meta_description' => 'Solve IELTS listening test on homestay application and check your band score with answers.',
                'listening_focus_keywords' => 'homestay application listening test',
                'reading_meta_title' => 'Pulling Strings to Build Pyramids Cambridge 7 Reading Test 4',
                'reading_meta_description' => 'Solve IELTS reading test on pulling strings to build pyramids and check your band scores with answers.',
                'reading_focus_keywords' => 'pulling strings to build pyramids reading test',
            ],
            
            // Test 8 (ID: 77)
            [
                'id' => 77,
                'listening_meta_title' => 'Total Insurance Incident Report Cambridge 8 Listening Test 2',
                'listening_meta_description' => 'Solve IELTS listening test on total insurance incident report and check your band score with answers.',
                'listening_focus_keywords' => 'total insurance incident report listening test',
                'reading_meta_title' => "Australia's Sporting Success Cambridge 6 Reading Test 1",
                'reading_meta_description' => "Solve IELTS reading test on australia's sporting success and check your band scores with answers.",
                'reading_focus_keywords' => "australia's sporting success reading test",
            ],
            
            // ============= GENERAL TRAINING TESTS =============
            
            // GT Test 1 (ID: 16)
            [
                'id' => 16,
                'listening_meta_title' => 'Employment Agency Possible Jobs Cambridge 15 Listening Test 3',
                'listening_meta_description' => 'Solve IELTS listening test on employment agency possible jobs and check your band score with answers.',
                'listening_focus_keywords' => 'employment agency possible jobs listening test',
                'reading_meta_title' => 'Get a Grant for Scientific Research Cambridge 10 GT Reading Test',
                'reading_meta_description' => 'Solve IELTS GT reading test on get a grant for scientific research and check your band scores with answers.',
                'reading_focus_keywords' => 'get a grant for scientific research GT reading test',
            ],
            
            // GT Test 2 (ID: 17)
            [
                'id' => 17,
                'listening_meta_title' => 'West Bay Hotel - details of job Cambridge 8 Listening Test 4',
                'listening_meta_description' => 'Solve IELTS listening test on West Bay Hotel - details of job and check your band score with answers.',
                'listening_focus_keywords' => 'West Bay Hotel - details of job listening test',
                'reading_meta_title' => 'HELP - snack bar serving person Cambridge 9 GT Reading Test',
                'reading_meta_description' => 'Solve IELTS GT reading test on HELP - snack bar serving person and check your band scores with answers.',
                'reading_focus_keywords' => 'HELP - snack bar serving person GT reading test',
            ],
            
            // GT Test 3 (ID: 68)
            [
                'id' => 68,
                'listening_meta_title' => 'Customer Satisfaction Survey Cambridge 15 Listening Test 4',
                'listening_meta_description' => 'Solve IELTS listening test on customer satisfaction survey and check your band score with answers.',
                'listening_focus_keywords' => 'customer satisfaction survey listening test',
                'reading_meta_title' => 'Consumer advice Cambridge 15 GT Reading Test 1',
                'reading_meta_description' => 'Solve IELTS GT reading test on consumer advice and check your band scores with answers.',
                'reading_focus_keywords' => 'consumer advice GT reading test',
            ],
            
            // GT Test 4 (ID: 70)
            [
                'id' => 70,
                'listening_meta_title' => 'Copying photos to digital format Cambridge 16 Listening Test 2',
                'listening_meta_description' => 'Solve IELTS listening test on copying photos to digital format and check your band score with answers.',
                'listening_focus_keywords' => 'copying photos to digital format listening test',
                'reading_meta_title' => "Harvey's Storage Cambridge 15 GT Reading Test 2",
                'reading_meta_description' => "Solve IELTS GT reading test on harvey's storage and check your band scores with answers.",
                'reading_focus_keywords' => "harvey's storage GT reading test",
            ],
            
            // GT Test 5 (ID: 72)
            [
                'id' => 72,
                'listening_meta_title' => 'Cookery Classes Cambridge 13 Listening Test 1',
                'listening_meta_description' => 'Solve IELTS listening test on cookery classes and check your band score with answers.',
                'listening_focus_keywords' => 'cookery classes listening test',
                'reading_meta_title' => 'The Best Suitcases Cambridge 13 GT Reading Test 1',
                'reading_meta_description' => 'Solve IELTS GT reading test on the best suitcases and check your band scores with answers.',
                'reading_focus_keywords' => 'the best suitcases GT reading test',
            ],
            
            // GT Test 6 (ID: 75)
            [
                'id' => 75,
                'listening_meta_title' => 'Holiday Rental Cambridge 16 Listening Test 4',
                'listening_meta_description' => 'Solve IELTS listening test on holiday rental and check your band score with answers.',
                'listening_focus_keywords' => 'holiday rental listening test',
                'reading_meta_title' => 'The Best Hiking Boots Cambridge 16 GT Reading Test 4',
                'reading_meta_description' => 'Solve IELTS GT reading test on the best hiking boots and check your band scores with answers.',
                'reading_focus_keywords' => 'the best hiking boots GT reading test',
            ],
            
            // GT Test 7 (ID: 78)
            [
                'id' => 78,
                'listening_meta_title' => "Rented Properties Customer's Requirements Cambridge 8 Listening Test 3",
                'listening_meta_description' => "Solve IELTS listening test on rented properties customer's requirements and check your band score with answers.",
                'listening_focus_keywords' => "rented properties customer's requirements listening test",
                'reading_meta_title' => 'Eastern Energy Cambridge 7 GT Reading Test',
                'reading_meta_description' => 'Solve IELTS GT reading test on eastern energy and check your band scores with answers.',
                'reading_focus_keywords' => 'eastern energy GT reading test',
            ],
            
            // GT Test 8 (ID: 79)
            [
                'id' => 79,
                'listening_meta_title' => "Penny's interview took place Cambridge 7 Listening Test",
                'listening_meta_description' => "Solve IELTS listening test on Penny's interview took place and check your band score with answers.",
                'listening_focus_keywords' => "Penny's interview took place listening test",
                'reading_meta_title' => 'Visit Historic Houses in Northern Ireland GT Reading Test',
                'reading_meta_description' => 'Solve IELTS GT reading test on visit historic houses in northern ireland and check your band scores with answers.',
                'reading_focus_keywords' => 'visit historic houses in northern ireland GT reading test',
            ],
        ];

        foreach ($metaData as $data) {
            DB::table('tests')
                ->where('id', $data['id'])
                ->update([
                    'listening_meta_title' => $data['listening_meta_title'],
                    'listening_meta_description' => $data['listening_meta_description'],
                    'listening_focus_keywords' => $data['listening_focus_keywords'],
                    'reading_meta_title' => $data['reading_meta_title'],
                    'reading_meta_description' => $data['reading_meta_description'],
                    'reading_focus_keywords' => $data['reading_focus_keywords'],
                    'updated_at' => now(),
                ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $testIds = [14, 15, 67, 69, 73, 74, 76, 77, 16, 17, 68, 70, 72, 75, 78, 79];
        
        DB::table('tests')
            ->whereIn('id', $testIds)
            ->update([
                'listening_meta_title' => null,
                'listening_meta_description' => null,
                'listening_focus_keywords' => null,
                'reading_meta_title' => null,
                'reading_meta_description' => null,
                'reading_focus_keywords' => null,
            ]);
    }
};