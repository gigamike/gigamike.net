<?php

use Illuminate\Database\Seeder;

class CertificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('certifications')->insert([
          'name' => 'AWS Certified Solutions Architect – Professional',
          'description' => null,
          'url' => 'https://www.certmetrics.com/amazon/public/badge.aspx?i=4&t=c&d=2018-04-24&ci=AWS00193558',
          'image_filename' => 'aws-certified-solutions-architect-professional.png',
          'certification_tag_id' => 1,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'AWS Certified Solutions Architect – Associate',
          'description' => null,
          'url' => 'https://www.certmetrics.com/amazon/public/badge.aspx?i=1&t=c&d=2017-04-03&ci=AWS00193558',
          'image_filename' => 'aws-certified-sysops-administrator-associate.png',
          'certification_tag_id' => 1,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'AWS Certified SysOps Administrator – Associate',
          'description' => null,
          'url' => 'https://www.certmetrics.com/amazon/public/badge.aspx?i=3&t=c&d=2017-05-22&ci=AWS00193558',
          'image_filename' => 'aws-certified-sysops-administrator-associate.png',
          'certification_tag_id' => 1,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'AWS Certified Developer – Associate',
          'description' => null,
          'url' => 'https://www.certmetrics.com/amazon/public/badge.aspx?i=2&t=c&d=2017-02-13&ci=AWS00193558',
          'image_filename' => 'aws-certified-developer-associate.png',
          'certification_tag_id' => 1,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'AWS Certified Cloud Practitioner',
          'description' => null,
          'url' => 'https://www.certmetrics.com/amazon/public/badge.aspx?i=9&t=c&d=2018-12-12&ci=AWS00193558',
          'image_filename' => 'aws-certified-cloud-practitioner.png',
          'certification_tag_id' => 1,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'BTA Certified Blockchain Solution Architect',
          'description' => '0xae267ae2337e6b7c62d81a7aa22f5f981d9149a51cd3bb2d3876f4490b9379eb',
          'url' => 'https://www.btacertified.com/certification',
          'image_filename' => 'bta-certified-blockchain-solution-architect.png',
          'certification_tag_id' => 0,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'BTA Certified Blockchain Security Professional',
          'description' => '0x428fcdff2c5266a9293332e5b0d4ab3b004a1eed89b519fb1868a38cfa82b142',
          'url' => 'https://www.btacertified.com/certification',
          'image_filename' => 'bta-certified-blockchain-security-professional.png',
          'certification_tag_id' => 2,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'BTA Certified Blockchain Developer – Ethereum',
          'description' => '0xf9881f7c0ccb635678ed598c69cc5ab8b51b7edda7ebfba74df7273b0a2777b2',
          'url' => 'https://www.btacertified.com/certification',
          'image_filename' => 'bta-certified-blockchain-developer-ethereum.png',
          'certification_tag_id' => 2,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'Blockchain Council Certified Blockchain Architect',
          'description' => null,
          'url' => 'https://www.credential.net/13639936',
          'image_filename' => 'blockchain-council-certified-blockchain-architect.png',
          'certification_tag_id' => 2,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'Blockchain Council Certified Blockchain Developer V2',
          'description' => null,
          'url' => 'https://www.credential.net/13215939',
          'image_filename' => 'blockchain-council-certified-blockchain-developer-v2.png',
          'certification_tag_id' => 2,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'Blockchain Council Certified Blockchain Expert – V2',
          'description' => null,
          'url' => 'https://www.credential.net/13112438',
          'image_filename' => 'blockchain-council-certified-blockchain-expert-v2.png',
          'certification_tag_id' => 2,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'Zend Certified Engineer',
          'description' => null,
          'url' => 'http://www.zend.com/en/yellow-pages/ZEND003229',
          'image_filename' => 'zend-certified-engineer.png',
          'certification_tag_id' => 3,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'Zend Framework 2 Certified Engineer',
          'description' => null,
          'url' => 'http://www.zend.com/en/yellow-pages/ZEND003229',
          'image_filename' => 'zend-framework-2-certified-engineer.png',
          'certification_tag_id' => 3,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'Zend Framework 1 Certified Engineer',
          'description' => null,
          'url' => 'http://www.zend.com/en/yellow-pages/ZEND003229',
          'image_filename' => 'zend-framework-1-certified-engineer.png',
          'certification_tag_id' => 3,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'CompTIA A+',
          'description' => null,
          'url' => 'https://www.certmetrics.com/comptia/public/verification.aspx?code=CEXQEYLFJHR11ZC0',
          'image_filename' => 'comptia.png',
          'certification_tag_id' => 4,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'CompTIA IT Fundamentals Certified',
          'description' => null,
          'url' => 'https://www.certmetrics.com/comptia/public/verification.aspx?code=QXLGJE3F2CEEQXWS',
          'image_filename' => 'comptia-it-fundamentals-certified.png',
          'certification_tag_id' => 4,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'EC-Council: Certified Secure Computer User',
          'description' => 'ECC97027549627',
          'url' => null,
          'image_filename' => 'ec-council-certified-secure-computer-user.png',
          'certification_tag_id' => 5,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'ICDL/ECDL Secure Use of IT Certified',
          'description' => null,
          'url' => null,
          'image_filename' => 'icdlecdl-secure-use-of-it-certified.png',
          'certification_tag_id' => 5,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'IPV6 CNE 6 Level 1 Certified',
          'description' => null,
          'url' => null,
          'image_filename' => 'ipv6-cne-6-level-1-certified.png',
          'certification_tag_id' => 5,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('certifications')->insert([
          'name' => 'Hire Me Now',
          'description' => null,
          'url' => 'https://gigamike.net/pdf/MichaelGerardGalonCV.pd',
          'image_filename' => 'hire-me-now.png',
          'certification_tag_id' => 5,
          'created_user_id' => 1,
          'created_at' => date('Y-m-d H:i:s'),
      ]);
    }
}
